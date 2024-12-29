<?php
function getCSS($fileName)
{
    $exe = ".css";

    $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

    if (strpos($url, "public/css/") !== false) {
        $path = "/questioniare/public/css/";
    } else {
        $path = "../../public/css/";
    }

    $fullPath = $path . $fileName . $exe;

    if (!file_exists($fullPath)) {
        echo "Error: " . $fileName . " Does not exists";
        return false;
    }
    $_SESSION["link"] = $fullPath;
    echo $fullPath;
}
