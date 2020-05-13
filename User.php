<?php

/**
 * Class user
 * permet de gérer les utilisateurs
 */
require 'form.php';
require 'DataBase.php';

class User{

    /**
     * @var string/int $id 
     */
    private $id;

    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $email
     */
    private $email;
    
    /**
     * @var string $password
     */
    private $password;

    /**
     * @var bool $connected
     */
    private $connected;


    public function __constructor($id, $username, $email, $password){
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    
}

?>