<?php

/**
* Clase model. Padre del resto de modelos
* Salvo el modelo de articulo que no lo cambiaremos
*/

namespace MatriculaMVC\App;

class Model
{
    protected $_pdo;

    public function __construct()
    {
        //echo "En el padre de modelos";
        $this->_pdo = new \PDO('mysql:host=localhost;dbname=mvc', 'usuario', 'usuario');
    }
}
