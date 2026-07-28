<?php








spl_autoload_register(function ($className) {

    $paths = [
        "../system/libraries/",
        "../system/config/",
        "../app/Controllers/",
        "../app/Models/"
    ];

    foreach ($paths as $path) {

        $file = $path . $className . ".php";

        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
// require_once "../system/libraries/Controllers.php";
// require_once "../system/libraries/Routing.php";
// require_once "../system/config/Config.php";

// require_once "../system/libraries/Database.php";

// require_once "helpers/session.php";





// function mvc_project($className){
//     require_once "../system/libraries/".$className.".php";
// }
// spl_autoload_register("mvc_project")

