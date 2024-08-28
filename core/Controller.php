<?php
class Controller
{
    function __construct()
    {
        if ($_GET && isset($_GET["action"])) {
            $action = $_GET["action"];
            if (method_exists($this, $action)) {
                $this->$action();
            }
            else{
                die("Sitio no encontrado<br>");
            }
        }else{
            if (method_exists($this, "index")) {
                $this->index();
            } else {
                die("Indice no definido<br>");
            }
        }
    }
    function index()
    {
        echo "Este es el metodo index<br>";
    }
    
    
}