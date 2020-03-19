<?php
define("URL", "http://localhost/depth/");
define("ENVIRONMENT", "development");

global $config;
$config = array();

if (ENVIRONMENT == "development") {
    $config["dbname"] = "depth";
    $config["dbhost"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
} else {
}
