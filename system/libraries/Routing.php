<?php



class Routing
{
    protected $currentController = "pages";
    protected $currentMethod = "index";
    protected $parametr = [];



    public function __construct()
    {
        $url = $this->GetUrl();

        if (!empty($url) && file_exists("../app/Controllers/"  . ucwords($url[0]) . ".php")) {
            $this->currentController = ucwords($url[0]);

            unset($url[0]);
        }

        require_once "../app/Controllers/" . $this->currentController . ".php";
        // var_dump($this->currentController);
        // die();
        $this->currentController = new $this->currentController;
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        // $this->parametr=$url ? array_values($url):[];
        // call_user_func_array([$this->currentController,$this->currentMethod],$this->parametr);

        $this->parametr = $url ? array_values($url) : [];


        call_user_func_array([$this->currentController, $this->currentMethod], $this->parametr);
    }

    public function GetUrl()
    {
        if (isset($_GET['url'])) {
            // var_dump($_GET['url']);
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        } else {
            return [];
        }
    }
}
