<?php

/**
* Clase con información de ayuda
*/
namespace MatriculaMVC\Controller;

class Help
{
    public function __construct()
    {
        // echo "Estamos en Help";
    }

    public function index()
    {
        require '../views/help/index.php';
    }
}
