<?php

class ContatoController extends Controller
{
    public function index()
    {
        $viewTitle = "Contato";
        $datas = array();
        $this->loadTemplate("contato", $viewTitle, $datas);
    }
}
