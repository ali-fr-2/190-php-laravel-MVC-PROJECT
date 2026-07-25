<?php 

class Users extends Controllers {
    public function __construct()
    {
        
    }
    public function register(){
        if($_SERVER['REQUEST_METHOD']=="POST"){

        }else{

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


            // die("die");
            $this->view("pages/register",$data);
        }
    }
}

?>