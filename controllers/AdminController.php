<?php

class AdminController extends Controller
{
    private $admin;

    public function __construct()
    {
        $this->admin = new Admin();

        if (!$this->admin->isLogged()) {
            $this->loadView("Login", $datas = array());
        }
    }

    public function index()
    {
        $datas = array();

        if (isset($_POST["usuario"]) && !empty($_POST["usuario"])) {
            $this->admin->setUsuario(addslashes($_POST["usuario"]));
            $this->admin->setSenha(addslashes($_POST["senha"]));

            if ($this->admin->getLogin()) {
                header("Location: " . URL . "admin");
            } else {
                header("Location: " . URL . "admin");
            }
        } else if ($this->admin->isLogged()) {
            $this->loadTemplateAdmin("admin", "Admin", $datas);
        } else {
            $this->loadView("Login", $datas = array());
        }
    }

    public function logout()
    {
        unset($_SESSION["user_logged"]);
        header("Location: " . URL . "admin");
    }
}
