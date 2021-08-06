<?php 
require_once __DIR__  . '/../vendor/autoload.php';
use app\core\Controller;
use app\controller\Home;
use app\controller\Student;
use app\core\App;
$app = new App();
$controller = new Controller();
$home = new Home();
$student = new Student();
