<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Posts;
use App\Request;
use App\Session;
use App\View;

class AuthController
{
    public function registerView()
    {
        if(!empty($_SESSION['userInfo'])){
            redirect('/');
        }
        View::render("register", 'view/register');
    }

    public function registerPost()
    {
        $data = Request::postData();
        $data["user_password"] = password_hash($data["user_password"],PASSWORD_DEFAULT);
        $users = new Users();
        $result = $users->create($data);
        if ($result) {
            $_SESSION["userInfo"] = $data;
            \redirect("/");
        } else {
            View::render("error", "view\index", ['message' => 'Not Access, Please Try Again Later. ;)']);
        }

    }

    public function loginView()
    {
        if(!empty($_SESSION['userInfo'])){
            redirect('/');
        }
        View::render("main", 'view/login');
    }
    public function loginPost()
    {
        $data = Request::postData();
        $user_name = $data['user_name'];
        $user_password = $data['user_password'];

        $users = new Users();
        $result = $users->where('user_name', $user_name)->get();
        if ($result && password_verify($user_password,$result[0]['user_password'])) {
            $_SESSION['userInfo'] = $result[0];
            \redirect('/');
        } else {
            View::render("error", "view\index", ['message' => 'Not Access, Please Try Again Later. ;)']);
        }
    }

    public function logout()
    {
        session_destroy();
        session_regenerate_id();
        \redirect("/login");
    }


}
//        $dsn = "mysql:host=localhost;dbname=news_blog";
//        try {
//            $dbConnect = new \PDO($dsn, 'root', '138179mm');
//            $dbConnect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//        }catch (\Exception $e){
//            echo "error happened while connecting".$e->getMessage();
//            exit;
//        }
//$result = $dbConnect->query('SELECT * FROM users')->fetchAll();
//        $sql= "insert into users(full_name,phone) VALUES ('$full_name', '$phone')";
//        $insertQuery = $dbConnect->query($sql);
//        $dbConnect->query('insert into users (full_name,phone) values ('sgadf ajsdh','09545454')');
//        var_dump($dbConnect->lastInsertId(),$insertQuery);


