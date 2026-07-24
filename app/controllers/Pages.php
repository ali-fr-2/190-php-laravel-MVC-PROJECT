<?php

class Pages extends Controllers
{
    public function __construct()
    {
        // echo "pages";
    }

    public function index()
    {
        $this->view("index");
    }
    public function masters()
    {
        $this->view("pages/masters");
    }
}
