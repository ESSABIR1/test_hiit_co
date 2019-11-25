<?php

namespace Controller;

use Manager\MessageManager;
use Manager\UserManager;

class AppController extends DefaultController
{

    /**
     * AppController constructor.
     */
    public function __construct()
    {
    }

    public function home(){
        $user = $this->getUser();
        $usersConnected = UserManager::findConnected($user);
        $messages = MessageManager::findBy([],['DATE'=>'DESC'],50,0);
        require_once 'View/chat.php';
    }

    public function error404(){
        require_once 'View/404.html';
    }

}