<?php 
class Routing{
    protected $currentController="pages";
    protected $currentMethod="index";
    protected $parametr=[];


    public function __construct(){
        $this->GetUrl();
    }

    public function GetUrl(){
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],'/');
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode('/',$url);

            return $url;
            // var_dump($url);
        }else{
            return[];
        }
    }
}
?>