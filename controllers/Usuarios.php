<?php
class Usuarios extends Controller
{

    public function index(){
        $ViewUsuario = new Views("Usuarios/usuarios.php");
    }

    public function getUsuarios()
    {
        $usuarios = array("jose", "carlos");
        $ListarUsuarios = new Views("Usuarios/listarUsuarios.php", compact("usuarios"));

    }

    
}