<?php 
namespace app\controller;
use app\core\Controller;
class Student extends Controller{
	 public function index($id=null){
		echo 'Hello I am a student'. $id;
	}
}