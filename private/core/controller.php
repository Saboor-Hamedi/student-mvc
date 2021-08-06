<?php  
namespace app\core;
class Controller{
     public function view($view)
     {
         if(\file_exists("../../private/views/" . $view . ".view.php")){
              require_once "../../private/views/" .$view . ".view.php";
         }else{
              require_once "../../private/views/404.view.php";
         }
     }
}