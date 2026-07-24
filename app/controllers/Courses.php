<?php 

class Courses extends Controllers{
    public function __construct()
    {
        echo "courses";
    }
    public function index(){
        $this->view("Courses");
    }

    public function edit($id){
        echo $id;
    }
}

?>