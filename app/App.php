<?php

class App
{
    public function run()
    {
        $params = array();
        $url = "/";
        $url .= (!empty($_GET["url"])) ? $_GET["url"] : "";

        if (!empty($url) && $url != "/") {
            $url = explode("/", $url);
            array_shift($url);

            $currentController = $url[0] . "Controller";
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = "index";
            }

            if (count($url) > 0) $params = $url;
        } else {
            $currentController = "HomeController";
            $currentAction = "index";
        }

        require_once "Controller.php";
        $current = new $currentController();
        call_user_func_array(array($current, $currentAction), $params);
    }
}
