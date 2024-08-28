<?php
class Contactos extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $Loader = new LoadModel("ContactosModel");
        $contactosModel = new ContactosModel();
        $Contactos = $contactosModel->getContactos();
        $ViewContactos = new Views("Contactos/index.php", compact("Contactos"));
    }

}
