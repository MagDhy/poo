<?php

/**
 * class Validator
 * Permet de valider les données envoyées par le formulaire.
 */
require 'form.php';

class Validator{

    /**
     * @param array $data the content of the inputs
     * filter the inputs to avoid hacking
     */
    public function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * @param string $string content of input
     * test if a string is valid
     */
    public function test_string($string){
        if (!preg_match("/^[a-zA-Z]*$/", $string)){
            return 'Sorry, the string is invalid, it should be letters and space.';
        }
    }

    /**
     * @param int $int content of input
     * test if a number is a valid integer 
     */
    public function test_int($int){
        if (!preg_match("/^[+-]?\d+$/", $int)){
            return 'Sorry, invalid integer, it should be a number without any comma or dot(point).';
        }
    }

    /**
     * @param float $float content of input
     * test if a number is a valid float
     */
    public function test_float($float){
        if (!preg_match("/\-?\d+\.\d+/")){
            return 'Sorry, invalid float, it should be a number with a comma or dot(point).';
        }
    }

    /**
     * @param string $mail content of input
     * test if the mail is a valid mail address
     */
    public function test_mail($mail){
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            return 'Sorry, invalid email, it should be like aaaa@aaaa.aaa.';
        }    
    }

    /**
     * @param string $url content of input
     * test if the url is a valid url
     */
    public function test_url($url){
        if (!preg_match("/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/")){
            return 'Sorry, the url is invalid, try again.';
        }
    }
}

?>