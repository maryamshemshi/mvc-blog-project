<?php

namespace App\Models;

class Posts extends Model
{
    protected $table = 'posts';

    public function hasLiked()
    {
        $userId = @$_SESSION['userInfo']['id'];

        $sql = $this->connection
            ->connection()
            ->prepare("SELECT *,
               (select exists(select * from likes where likes.user_id=:userId and likes.news_id=posts.id)) as is_liked
                FROM `posts`"
            );

        $sql->bindValue(':userId', $userId);

        $sql->execute();
        return $sql->fetchAll(2);
    }
}
