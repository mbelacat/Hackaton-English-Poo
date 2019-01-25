<?php
/**
 *
 */
class exempleController
{

  public function welcome(){

  }

  public function showUsers() {

    require "model/UserManager.php";
    $getusers = New UserManager();
    $users = $getusers->getUsers();
    var_dump($users);
    require "view/showUsersView.php";
        }

//////test add user(Student)
    function addStudent(){
      if(!empty($_POST)){
        //Add User
            addUser($_POST);
            $user_id = getLastUserID();
            $code = uniqCode(10);
            //Add Session
            if(addSession($_POST, $user_id, $code)){
                redirectTo('secretary/results');
            }
            else{
                redirectTo('secretary/addStudent');
            }
          }
      require 'view/createSessionStudentView.php';
    }



}


 ?>
