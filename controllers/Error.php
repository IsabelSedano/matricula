<?php

/**
* Clase con información de ayuda
*/
namespace MatriculaMVC\Controller;

class Error
{
    public function __construct()
    {
        //echo "Estamos en Error";
    }
    public function index($e)
    {
        require_once '../views/error/index.php';
    }
}
