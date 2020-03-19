<?php

class HomeController extends Controller
{
    public function index()
    {
        $banner = new Banner();
        $conteudo = new Conteudo();

        $datas = array(
            "banners" => $banner->read(),
            "texto" => $banner->readTextoBanner(),
            "conteudos" => $conteudo->read()
        );

        $viewTitle = "Depth Worship Oficial";
        $this->loadTemplate("home", $viewTitle, $datas);
    }
}
