<?php 

class Users extends Controllers{
    public function __construct()
    {
        
    }
    public function register(){

        if($_SERVER['REQUEST_METHOD']=="POST"){

        }

        else{
            $data=[
                'name'=>'',
                'email'=>'',
                'password'=>'',
                'confirm_password'=>'',
                'name_error'=>'',
                'email_error'=>'',
                'password_error'=>'',
                'confirm_password_error'=>''

            ];




            $this->view("pages/register",$data);
        }
    }
    public function login(){

        if($_SERVER['REQUEST_METHOD']=="POST"){

        }

        else{
            $data=[
                'email'=>'',
                'password'=>'',
                'email_error'=>'',
                'password_error'=>'',

            ];




            $this->view("pages/login",$data);
        }
    }
}

?>