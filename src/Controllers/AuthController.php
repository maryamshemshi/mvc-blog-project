<?php

namespace App\Controllers;

use App\Models\Users;
use App\Request;
use App\View;
use function redirect;

class AuthController
{
    public function registerView()
    {
        if (!empty($_SESSION['userInfo'])) {
            redirect('/');
        }
        View::render("register", 'index');
    }

    public function registerPost()
    {
        $data = Request::postData();
        if (empty($data["user_password"])) {
            View::render("error", "views/index", ['message' => 'password is required.']);
            return;
        }
        $data["user_password"] = password_hash($data["user_password"], PASSWORD_DEFAULT);
        $users = new Users();
        $result = $users->create($data);

        if ($result) {
            $_SESSION["userInfo"] = $data;
            redirect("/");
        } else {
            View::render("error", "views\index", ['message' => 'Register Failed, Please Try Again Later. ;)']);
        }
    }

    public function loginView()
    {
        if (!empty($_SESSION['userInfo'])) {
            redirect('/');
        }
        View::render("main", 'views/login');
    }

    public function loginPost()
    {
        $data = Request::postData();
        $user_name = $data['user_name'];
        $user_password = $data['user_password'];

        $users = new Users();
        $result = $users->where('user_name', $user_name)->get();

        if ($result && password_verify($user_password, $result[0]['user_password'])) {
            $_SESSION['userInfo'] = $result[0];
            redirect('/');
        } else {
            View::render("error", "views\index", ['message' => 'Not Access, Please Try Again Later. ;)']);
        }
    }

    public function logout()
    {
        session_destroy();
        session_regenerate_id();
        redirect("/login");
    }

}


