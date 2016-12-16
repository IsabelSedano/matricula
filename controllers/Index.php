<?php

/**
* Clase con información de ayuda
*/
namespace MatriculaMVC\Controller;

class Index
{
    public function __construct()
    {
        //echo "<hr>Estamos en Index";
    }
    public function index($arg1, $arg2)
    {
//        echo '<br> Metodo index';
//        echo "<br> $arg1";
//        echo "<br> $arg2";
        require '../views/index/index.php';
    }

    public function saludo($persona)
    {
        require '../views/index/saludo.php';
    }
}
