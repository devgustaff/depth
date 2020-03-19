<?php

class Controller
{
    public function loadView($viewName, $viewData = array())
    {
        @extract($viewData);
        require_once "views/" . $viewName . ".php";
    }

    public function loadTemplate($viewName, $viewTitle, $viewData = array())
    {
        require_once "views/template.php";
    }

    public function loadTemplateAdmin($viewName, $viewTitle, $viewData = array())
    {
        require_once "views/templateAdmin.php";
    }
}
