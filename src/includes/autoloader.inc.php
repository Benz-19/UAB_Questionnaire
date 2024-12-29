<?php
spl_autoload_register('autoLoader');

function autoLoader($className)
{
    // Replace backslashes with forward slashes
    $className = str_replace("\\", "/", $className);

    // Base directory for absolute path
    $baseDir = __DIR__ . "/../";

    $path = $baseDir . "classes/" . $className . ".class.php";

    if (!file_exists($path)) {
        echo $path . " File does not exists! <br>";
        return false;
    }

    require_once $path;
}
