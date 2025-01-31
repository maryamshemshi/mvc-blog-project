<?php

namespace App\Controllers;

use App\Models\Comments;
use App\Models\Likes;
use App\Models\Posts;
use App\Request;
use App\View;
use DateTime;
use function redirect;

class HomeController
{
    public function homeIndexView()
    {
        $posts = new Posts();
        $result = $posts->hasLiked();

        if ($result) {
            View::render("main", "views\index", ['result' => $result, 'continue' => ['false']]);
        } else {
            View::render("main", "views\index", ['continue' => ['nothingAllNews']]);
        }
    }

    public function continue_posts()
    {
        $id = Request::getData()['id'];
        $idnews = $_SESSION["newsInfo"] = $id; // it isn't usable right now.
        $posts = new Posts();
        $result = $posts->where("id", "$id")->get();
        if (!empty($_SESSION['userInfo'])) {
            View::render("homeIndex", "views\index", ['result' => $result, 'continue' => ['true']]);
        } else {
            View::render("error", "views\index", ['message' => "For Access To New's Details, Should Login!"]);
        }
    }

    public function view()
    {

    }

    public function myNews()
    {
        if (!isset($_SESSION['userInfo']) || !isset($_SESSION['userInfo']['id'])) {
            View::render("error", "views\index", ['message' => "You must be logged in to view your news."]);
            return;
        }

        $user_id = $_SESSION['userInfo']['id'];
        $posts = new Posts();
        $result = $posts->where('user_id', $user_id)->get();

        View::render("main", "views/news", ['result' => $result, 'continue' => ['myNews']]);
    }

    public function addNews()
    {
        View::render("addNews", "views\index");
    }

    public function addNewsPost()
    {
        $data = Request::postData();
        $time = (new DateTime())->format('Y-m-d H:i:s');
        $user_id = $_SESSION["userInfo"]["id"];
        $picName = $_FILES['pic_news']['name'];
        $picTmpPath = $_FILES['pic_news']['tmp_name'];
        $picMainPath = "Images/$picName";

        move_uploaded_file($picTmpPath, $picMainPath);

        $data['pic_news'] = $picMainPath;
        $data['time_news'] = $time;
        $data['user_id'] = $user_id;

        $posts = new Posts();
        $result = $posts->create($data);

        if ($result) {
            redirect('/myNews');
        } else {
            View::render("error", "views\index", ['message' => 'Sorry, Your New Post Not Insert. Please Try Again.']);
        }
    }

    public function editNews()
    {
        $data = Request::getData();
        $id = $data['id'];
        $posts = new Posts();
        $result = $posts->where("id", $id)->get();
        View::render('editNews', 'views\index', ['result' => $result]);
    }

    public function editNewsPost()
    {
        $data = Request::postData();
        $id = $data['id'];
        unset($data['id']);

        $picName = $_FILES['pic_news']['name'];
        $picTmpPath = $_FILES['pic_news']['tmp_name'];
        $picMainPath = "Images/$picName";

        move_uploaded_file($picTmpPath, $picMainPath);

        $time = time();
        $data['pic_news'] = $picMainPath;
        $data['time_news'] = $time;

        $posts = new Posts();
        $result = $posts->where('id', $id)->update($data);
        if ($result) {
            redirect("/myNews");
        } else {
            View::render("error", "views\index", ['message' => 'Sorry, Your Edit Post Not Successfully, Please Try Again.^^']);
        }
    }

    public function deleteNews()
    {
        $data = Request::getData();
        $id = $data['id'];
        $posts = new Posts();
        $result = $posts->where('id', $id)->delete();
        if ($result) {
            redirect('/myNews');
        } else {
            View::render("error", "views\index", ['message' => "Sorry, Your Post Isn't Deleted, Please Try Again.^^"]);
        }
    }

    public function likeNews()
    {
        $data['news_id'] = Request::getData()['id'];
        $data['user_id'] = $_SESSION['userInfo']['id'];
        $likes = new Likes();
        $result = $likes->create($data);
        if ($result) {
            redirect('/');
        }
    }

    public function disLikeNews()
    {
        $posts_id = Request::getData()['id'];
        $user_id = $_SESSION['userInfo']['id'];

        $likes = new Likes();

        $likes->where('news_id', $posts_id)
            ->where('user_id', $user_id)
            ->delete();

        redirect('/');
    }

    public function showComment()
    {
        $comments = new Comments();
        $result = $comments->get();
        $posts_id = Request::getData();
        if ($result) {
            View::render("homeIndex", "views\index", ['result' => $result, 'continue' => ['comments'], 'news_id' => $posts_id]);
        } else {
            View::render("homeIndex", "views\index", ['result' => $result, 'continue' => ['comments'], 'news_id' => $posts_id]);
        }
    }

    public function addComment()
    {
        $data = Request::postData();
        $data['user_id'] = $_SESSION['userInfo']['id'];
        $posts_id = $data['news_id'];
        $comments = new Comments();
        $result = $comments->create($data);
        if ($result) {
            redirect("\comment?id=$posts_id");
        } else {
            View::render("error", "views\index", ['message' => 'Sorry, Your Comment Is Not Inserted, Please Try Again.']);
        }
    }

}
