<?php

class usuarioController{
    public function index(){
        echo "Controlador usuarios, accion index";
    }

    public function register(){
        require_once 'views/usuario/register.php';
    }

    public function save(){
        if(isset($_POST)){
            var_dump($_POST);
            // exit();
        }
    }
}