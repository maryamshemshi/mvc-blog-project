<?php

namespace App\Controllers;

use App\Models\Posts;
use App\Request;
use App\View;

class PostController
{
    public function index()
    {
        $postModel = new Posts();
        $posts = $postModel->where('user_id',$_SESSION['user']['id'])->get();
        //before : $foo = 'bar'; =>  ['foo' => 'bar']  === compact('foo')
        View::render('main','index',compact('posts'));
    }

    public function createPost()
    {
        $data = Request::postData();

        $post = new Posts();
        $data['user_id'] = $_SESSION['user']['id'];

        $result = $post->create($data);
        if($result){
            redirect('/posts');
        }else{
            View::render('main','error',['message' => 'Posts did not create successfully']);
        }
//        customDump($data);
    }

    public function destroy()
    {
        $id = Request::getData()['post_id'];
        $post = new Posts();
        $result = $post->where('id',$id)->delete();
        if($result)
            redirect('/posts');
        else
            View::render('main','error',['message' => 'post delete failed']);
    }

    public function editPage()
    {
        $id = Request::getData()['post_id'];
        $post = new Posts();
        $post = $post->where('id',$id)->get()[0];
        View::render('main','tasks/edit',compact('task'));
    }

    public function update()
    {
        $data = Request::postData();
        $id = $data['post_id'];
        unset($data['post_id']);
        $post = new Task();
        $result= $post->update($data,['id' => $id]);
        if ($result)
            redirect('/posts');
        else
            View::render('main','error',['message' => 'post edit failed']);

    }
}