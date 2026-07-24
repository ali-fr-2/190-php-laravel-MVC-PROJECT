<?php 
class Routing{
    protected $currentController="pages";
    protected $currentMethod="index";
    protected $parametr=[];


    public function __construct(){
        $this->GetUrl();
    }

    public function GetUrl(){
        $url = $_GET['url'] ?? '';

        echo $url;
    }
}
?>