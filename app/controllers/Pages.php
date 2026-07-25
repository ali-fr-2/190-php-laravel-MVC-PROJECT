<?php

class Pages extends Controllers{
    public function __construct()
    {
        
    }
    public function index(){
        $this->view("index");
    }
}

?>