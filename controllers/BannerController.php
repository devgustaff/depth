<?php

class BannerController extends Controller
{
    private $admin;
    private $banner;

    public function __construct()
    {
        $this->admin = new Admin();
        $this->banner = new Banner();

        if (!$this->admin->isLogged()) {
            $this->loadView("Login", $datas = array());
        }
    }

    public function index()
    {
        $datas = array();
        if ($this->admin->isLogged()) {
            $this->loadTemplateAdmin("banner", "Gerênciar Banner", $datas);
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

                if (in_array($_FILES["file"]["type"], $formatos)) {
                    $this->banner->setUrl(md5(time() . rand(0, 999)) . ".jpg");

                    move_uploaded_file($_FILES["file"]["tmp_name"], "assets/upload-banner/" . $this->banner->getUrl());

                    $this->banner->insert();

                    header("Location: " . URL . "banner/exibir");
                } else {
                    $this->loadTemplateAdmin("add-banner", "Gerênciar Banner", $datas);
                }
            } else {
                $this->loadTemplateAdmin("add-banner", "Gerênciar Banner", $datas);
            }
        } else {
            header("Location: " . URL . "admin");
        }
    }

    public function exibir()
    {
        $datas = array();
        if ($this->admin->isLogged()) {
            $datas["banners"] = $this->banner->read();

            $this->loadTemplateAdmin("exibir-banners", "Gerênciar Banner", $datas);
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

                if (in_array($_FILES["file"]["type"], $formatos)) {
                    $this->banner->setUrl(md5(time() . rand(0, 999)) . ".jpg");

                    move_uploaded_file($_FILES["file"]["tmp_name"], "assets/upload-banner/" . $this->banner->getUrl());

                    $this->banner->update($id);

                    header("Location: " . URL . "banner/exibir");
                } else {
                    $this->loadTemplateAdmin("alterar-banner", "Gerênciar Banner", $datas);
                }
            } else {
                $this->loadTemplateAdmin("alterar-banner", "Gerênciar Banner", $datas);
            }
        } else {
            header("Location: " . URL . "admin");
        }
    }

    public function excluir($id)
    {
        $datas = array();
        if ($this->admin->isLogged()) {
            $this->banner->delete($id);
            header("Location: " . URL . "banner/exibir");
        } else {
            header("Location: " . URL . "admin");
        }
    }

    public function texto()
    {
        if ($this->admin->isLogged()) {
            $datas["texto"] = $this->banner->readTextoBanner();
            $this->loadTemplateAdmin("texto-banner", "Gerênciar Banner", $datas);
        } else {
            header("Location: " . URL . "admin");
        }
    }

    public function alterar_texto($id)
    {

        if ($this->admin->isLogged()) {
            $datas["texto"] = $this->banner->readTexto($id);
            
            if (isset($_POST["texto"]) && !empty($_POST["texto"])) {
                $this->banner->setTexto(addslashes($_POST["texto"]));
                $this->banner->updateTextoBanner($id);
                header("Location: " . URL . "banner/texto");
            } else {
                $this->loadTemplateAdmin("alterar-texto-banner", "Gerênciar Banner", $datas);
            }
        } else {
            header("Location: " . URL . "admin");
        }
    }
}
