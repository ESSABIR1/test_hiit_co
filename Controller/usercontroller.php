<?php

namespace Controller;

use Manager\UserManager;

class UserController extends DefaultController
{

    /**
     * UserController constructor.
     */
    public function __construct()
    {
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'GET')
            require_once 'View/login.php';
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $user = UserManager::login(htmlspecialchars($_POST['username']),htmlspecialchars(md5($_POST['password'])));
            if($user){
                $_SESSION['username'] = $user->getUsername();
                UserManager::makeOnLine($user);
                header("location:index.php");
            }else{
                $error_msg = 'Incorrect password !!';
                require_once 'View/login.php';
            }
        }
    }


    public function connected(){
        $users = UserManager::findConnected($this->getUser());
        $result = [];
        foreach ($users as $user){
            $result[] = $user->getUsername();
        }
        header('Content-Type: application/json');
        echo json_encode([
            'code' => 1,
            'users' => $result
        ]);
    }

    public function logout(){
        if($this->getUser()){
            UserManager::makeOffLine($this->getUser());
            session_destroy();
        }
        header("location:index.php?ctrl=user&act=login");
    }

    

}