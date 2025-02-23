<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use App\App;
use App\Controllers\AboutController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\UserController;


require_once dirname(__DIR__) . "/vendor/autoload.php";

session_start();

$basePath = dirname(__DIR__);
$app = new App($basePath);

$app->router->get('/', [HomeController::class, 'homeIndexView']);
$app->router->get('/myNews', [HomeController::class, 'myNews']);
$app->router->get('/addNews', [HomeController::class, 'addNews']);
$app->router->post('/addNews', [HomeController::class, 'addNewsPost']);
$app->router->get('/editNews', [HomeController::class, 'editNews']);
$app->router->post('/editNews', [HomeController::class, 'editNewsPost']);
$app->router->get('/deleteNews', [HomeController::class, 'deleteNews']);
$app->router->get('/like', [HomeController::class, 'likeNews']);
$app->router->get('/dis_like', [HomeController::class, 'disLikeNews']);
$app->router->get('/comment', [HomeController::class, 'showComment']);
$app->router->post('/addComment', [HomeController::class, 'addComment']);
$app->router->get('/continue_posts', [HomeController::class, 'continue_posts']);


$app->router->get('/contactUs', [AboutController::class, 'contactUs']);
$app->router->get('/aboutUs', [AboutController::class, 'aboutUs']);


$app->router->get('/register', [AuthController::class, 'registerView']);
$app->router->post('/register', [AuthController::class, 'registerPost']);
$app->router->get('/login', [AuthController::class, 'loginView']);
$app->router->post('/login', [AuthController::class, 'loginPost']);
$app->router->get('/logout', [AuthController::class, 'logout']);


$app->router->get('/user/delete', [UserController::class, 'delete']);
$app->router->get('/editMyUserName', [UserController::class, 'editUserName']);
$app->router->post('/editMyUserName', [UserController::class, 'editUserNamePost']);


$app->run();


