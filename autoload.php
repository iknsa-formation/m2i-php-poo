<?php
// --- autoload.php
spl_autoload_register(function ($class)
{
    if(file_exists("src/Entity/$class.php")) {
        require_once("src/Entity/$class.php");
    }
    else {
        throw new Exception("<br/>Impossible de charger la classe[$class].");
    }
});