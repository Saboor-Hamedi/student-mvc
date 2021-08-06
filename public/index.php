<?php 
require_once __DIR__  . '/../vendor/autoload.php';
use app\core\App;
use app\controller\Home;
use app\controller\Student;

$app = new App();
$home = new Home();
$student = new Student();

