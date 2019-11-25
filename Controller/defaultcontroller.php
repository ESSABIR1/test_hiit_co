<?php


namespace Controller;

use Manager\UserManager;
use Model\User;

class DefaultController
{
    /**
     * @return User|null
     */
    public function getUser(){
        if(!isset($_SESSION['username']))
            return null;
        else
            return UserManager::find($_SESSION['username']);
    }


}