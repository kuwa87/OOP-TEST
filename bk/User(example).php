<?php
include "Profile.php";
    class User extends Profile{

    public $userName = 'johndoe'; 
    public $firstName = 'John';
    public $lastName= 'Doe';
    public $single; 


    //methods
    public function __constract($par1, $par2){
        $this->single = $par1;
        $this->username = $par2;
    }

    public function display(){
        //call a private from other class
        $this->generate();

        //data1 is from Profile class
        return $this->data1."<br>";
    }

    public function hello_world(){
        return $this->single."<br>";
    }
    public function find_user($name){
        $userFound = $name;
        return "aaa" .$userFound."<br>";

    }
        }

?>