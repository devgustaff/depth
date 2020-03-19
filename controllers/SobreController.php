<?php

class SobreController extends Controller
{
    public function index()
    {
        $viewTitle = "Sobre";
        $datas = array();
        $this->loadTemplate("sobre", $viewTitle, $datas);
    }
}
