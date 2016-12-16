<?php

/**
* Clase controladora de Artículo
*/

namespace MatriculaMVC\Controller;

class Estudio
{
    public $model;

    public function __construct()
    {
        require_once "../models/Estudio.php";
        $this->model = new \MatriculaMVC\Model\Estudio;
    }

    public function index()
    {
        $this->model->get();

        $rows = $this->model->getRows();
        include "../views/estudio/index.php";
    }
    public function delete($id)
    {
        //procedimiento de borrado
        $this->model->delete($id);
        //reenvio de url
        header('Location: /estudio/index');
//        echo "Borrar datos del registro actual ($id)";
    }
    public function new()
    {
        require '../views/estudio/new.php';
    }
    public function insert()
    {
//        echo "Insertar registro nuevo (en $_POST, envio desde new)";
        $this->model->new();
        header('Location: /estudio/index');
    }
    public function edit($id)
    {
        echo "Formulario de edición con datos antiguos";
        $row = $this->model->getById($id);
        include "../views/estudio/edit.php";
    }
    public function update()
    {
        $this->model->update();
        header('Location: /estudio/index');
    }
}
