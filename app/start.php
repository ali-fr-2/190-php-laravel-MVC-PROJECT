<?php 
require_once "../system/config/Config.php";

require_once "../system/libraries/Controllers.php";
require_once "../system/libraries/Database.php";
require_once "../system/libraries/Routing.php";

function mvc_project($classname){
    require_once "../system/libraries/".$classname. ".php";
}
spl_autoload_register("mvc_project");
?>