<?php

class ConteudosController extends Controller
{
    private $admin;
    private $conteudo;

    public function __construct()
    {
        $this->admin = new Admin();
        $this->conteudo = new Conteudo();

        if (!$this->admin->isLogged()) {
            $this->loadView("Login", $datas = array());
        }
    }

    public function index()
    {
        $datas = array();
        if ($this->admin->isLogged()) {
            $this->loadTemplateAdmin("conteudos", "Gerênciar Conteúdos", $datas);
        } else {
            header("Location: " . URL . "admin");
        }
    }

    public function adicionar()
    {
        $datas = array();
        if ($this->admin->isLogged()) {
            if (isset($_FILES["file"]) && !empty($_FILES["file"]["tmp_name"])) {
                $formatos = array('image/jpg', 'image/jpeg', 'image/png');
                $conteudos = addslashes($_POST["conteudos"]);
                if (in_array($_FILES["file"]["type"], $formatos)) {
                    $this->conteudo->setUrl(md5(time() . rand(0, 999)) . ".jpg");
                    $this->conteudo->setConteudos($conteudos);

                    move_uploaded_file($_FILES["file"]["tmp_name"], "assets/upload-conteudo/" . $this->conteudo->getUrl());

                    $this->conteudo->insert();

                    header("Location: " . URL . "conteudos/exibir");
                } else {
                    $this->loadTemplateAdmin("add-conteudos", "Gerênciar Conteúdos", $datas);
                }
            } else {
                $this->loadTemplateAdmin("add-conteudos", "Gerênciar Conteúdos", $datas);
            }
        } else {
            header("Location: " . URL . "admin");
        }
    }

    public function excluir($id)
    {
        $datas = array();
        if ($this->admin->isLogged()) {
            $this->conteudo->delete($id);
            header("Location: " . URL . "conteudos/exibir");
        } else {
            header("Location: " . URL . "admin");
        }
    }

    public function alterar($id)
    {
        $datas = array();
        if ($this->admin->isLogged()) {
            if (isset($_FILES["file"]) && !empty($_FILES["file"]["tmp_name"])) {
                $formatos = array('image/jpg', 'image/jpeg', 'image/png');
                $conteudos = addslashes($_POST["conteudos"]);

                if (in_array($_FILES["file"]["type"], $formatos)) {
                    $this->conteudo->setUrl(md5(time() . rand(0, 999)) . ".jpg");
                    $this->conteudo->setConteudos($conteudos);

                    move_uploaded_file($_FILES["file"]["tmp_name"], "assets/upload-conteudo/" . $this->conteudo->getUrl());

                    $this->conteudo->update($id);

                    header("Location: " . URL . "conteudos/exibir");
                } else {
                    $this->loadTemplateAdmin("alterar-conteudos", "Gerênciar Conteúdos", $datas);
                }
            } else {
                $this->loadTemplateAdmin("alterar-conteudos", "Gerênciar Conteúdos", $datas);
            }
        } else {
            header("Location: " . URL . "admin");
        }
    }

    public function exibir()
    {
        if ($this->admin->isLogged()) {
            $datas = array();
            $offset = 0;
            $limit = 3;

            $total = $this->conteudo->getTotal();
            $datas["paginas"] = ceil($total / $limit);

            $datas["paginaAtual"] = 1;

            if (!empty($_GET["pagina"])) {
                $datas["paginaAtual"] = intval($_GET["pagina"]);
            } 

            $offset = ($datas["paginaAtual"] * $limit) - $limit;

            $datas["lista"] = $this->conteudo->getLista($offset, $limit);

            $this->loadTemplateAdmin("exibir-conteudos", "Gerênciar Conteúdos", $datas);
        } else {
            header("Location: " . URL . "admin");
        }
    }
}
