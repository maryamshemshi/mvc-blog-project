<?php

namespace App\Database\MySQL;

use Exception;
use PDO;
use PDOException;

class MySQLConnection
{
    /**
     * store this class's instance in singleton pattern
     * @var static
     */
    protected static MySQLConnection $database;
    private static ?self $instance = null;
    /**
     * stores the PDO instance to interact with db
     * @var PDO
     */
    protected $connection;

    /**
     * store the table name the make sql query
     * @var string
     */
    protected $table;

    /** stores the Where part of mysql query
     * @var string
     */
    public $where = '';

    /** stores the bind params of where clause to use in execute method of prepare statements
     * @var array
     */
    public $wherePlaceholder = [];

    /**
     * creates PDO instance and saves it to $this->connection
     * this method is made private to avoid creating multiple instances
     */
    private function __construct($host, $dbname, $username, $password)
    {
        try {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    /** use this method to get singleton instance of this class
     * @return MySQLConnection
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new MySQLConnection('localhost', 'news_blog', 'root', '138179mm');
        }

        return self::$instance;
    }

    public function connection(): PDO
    {
        return $this->connection;
    }

    public function setTable($table): MySQLConnection
    {
        $this->table = $table;
        return $this;
    }

    public function where(array $where = [], string $operator = "AND"): MySQLConnection
    {
        $sql = empty($this->where) ? " WHERE " : " AND ";
        $whereSql = [];
        $wherePlaceHolders = [];
        foreach ($where as $column => $value) {
            $whereSql [] = "$column=:$column";
            $wherePlaceHolders[":$column"] = $value;
        }
        $whereSql = implode(" $operator ", $whereSql);

        $sql .= $whereSql;
        $this->where .= $sql;
        $this->wherePlaceholder = array_merge($this->wherePlaceholder, $wherePlaceHolders);

        return $this;
    }

    /**
     * @throws Exception
     */
    public function insert(array $data): bool
    {

        $columns = array_keys($data);
        $valuesPlaceHolders = [];
        foreach ($data as $column => $value) {
            $valuesPlaceHolders[":$column"] = $value;
        }
        $columns = implode(',', $columns);
        $values = implode(',', array_keys($valuesPlaceHolders));

        $sql = "insert  into $this->table ($columns) VALUES($values)";
        $preparedStmt = $this->connection->prepare($sql);
        // bind params of insert statement
        try {
            return $preparedStmt->execute($valuesPlaceHolders);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update(array $data): bool
    {
        $sql = "UPDATE $this->table SET ";
        $valuesPlaceholder = [];
        $bindParamsOfSetQuery = [];
        foreach ($data as $column => $value) {
            // prefix it with 'setUpdate' to avoid conflicts with placeholders of where part
            $valuesPlaceholder[] = "$column=:setUpdate_$column";
            //create the array to pass to execute method containing bind parameters values
            $bindParamsOfSetQuery[":setUpdate_$column"] = $value;
        }
        $valuesPlaceholder = implode(",", $valuesPlaceholder);
        $sql .= $valuesPlaceholder;
        if (!empty($this->where))
            $sql .= $this->where;
        $prepareStmt = $this->connection->prepare($sql);
        /* here we have both : 1 where clause bind params and : 2 update set clause bind params
         so we have to merge them
        */
        $mergeParams = array_merge($bindParamsOfSetQuery, $this->wherePlaceholder);

        return $prepareStmt->execute($mergeParams);
    }

    public function delete(): bool
    {
        $sql = "DELETE FROM $this->table";
        if (!empty($this->where))
            $sql .= $this->where;

        $prepareStmt = $this->connection->prepare($sql);
        // bind params of where clause (if there is no where constraint it is an empty array and no problem will occur)
        return $prepareStmt->execute($this->wherePlaceholder);
    }

    public function select(array $columns = ['*'])
    {
        $sql = "SELECT " . implode(", ", $columns) . " FROM " . $this->table;
        if (!empty($this->where))
            $sql .= $this->where;
        $prepareStmt = $this->connection->prepare($sql);
        // bind params of where clause (if there is no where constraint it is an empty array and no problem will occur)
        $prepareStmt->execute($this->wherePlaceholder);
        return $prepareStmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lastInsertedId()
    {
        return $this->connection->lastInsertId();
    }
}