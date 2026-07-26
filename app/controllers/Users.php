<?php

class Users extends Controllers
{
    public $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function register()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'confirm_password' => $_POST['confirm_password'],
                'name_error' => '',
                'email_error' => '',
                'password_error' => '',
                'confirm_password_error' => ''
            ];
            if (empty($data['name'])) {
                $data['name_error'] = "enter your name";
            }
            if (empty($data['email'])) {
                $data['email_error'] = "enter your email";
            } else {
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_error'] = "email is repeted";
                }
            }
            if (empty($data['password'])) {
                $data['password_error'] = "enter your password";
            } elseif (strlen($data['password']) < 6) {
                $data['password_error'] = "password must be at least 6";
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_error'] = 'enter the repeat of your password';
            } elseif ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_error'] = 'password and confirm are not the same';
            }
            if (
                empty($data['name_error']) &&
                empty($data['email_error']) &&
                empty($data['password_error']) &&
                empty($data['confirm_password_error'])
            ) {
                die("hello");
            } else {
                $this->view("pages/register", $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_error' => '',
                'email_error' => '',
                'password_error' => '',
                'confirm_password_error' => ''

            ];




            $this->view("pages/register", $data);
        }
    }
    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'email_error' => '',
                'password_error' => ''
            ];
            if (empty($data['email'])) {
                $data['email_error'] = "enter your email";
            }
            if (empty($data['password'])) {
                $data['password_error'] = "enter your password";
            }
            if (
                empty($data['email_error']) &&
                empty($data['password_error'])
            ) {
                die("hello");
            } else {
                $this->view("pages/login", $data);
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'email_error' => '',
                'password_error' => '',

            ];




            $this->view("pages/login", $data);
        }
    }
}
