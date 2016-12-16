<?php

/**
* Modelo ActiveRecord Articulo
*/
namespace MatriculaMVC\Model;

class Estudio
{
    const DB_HOST = "localhost";
    const DB_USER = "usuario";
    const DB_PASS = "usuario";
    const DB_DATABASE = "mvc";

    private $_db;
    private $_rows;

    public function __construct()
    {
        // echo "Modelo Articulo";
        $this->_db = new \mysqli($this::DB_HOST, $this::DB_USER, $this::DB_PASS, $this::DB_DATABASE);
        if ($this->_db->connect_errno > 0) {
            //die($mysqli->error);
            throw new \Exception("Error de conexión a la BBDD" . '<br>' . $this->_db->connect_error, 404);
            
        }
    }

    public function get()
    {
        $sql = "SELECT * FROM matricula";
        $result = $this->_db->query($sql);

        if ($this->_db->errno) {
            die($this->_db->error);
        }

        $this->_rows = array();
        while ($row = $result->fetch_assoc()) {
            $this->_rows[] = $row;
        }
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM matricula where id=$id";
        $result = $this->_db->query($sql);

        if ($this->_db->errno) {
            die($this->_db->error);
        }

        while ($row = $result->fetch_assoc()) {
            return $row; //devuelve la primera fila
        }
        return array(); //si el id no existe array vacia
    }

    public function getRows()
    {
        return $this->_rows;
    }

    public function delete($id)
    {
        $sql = "delete from matricula where id = $id";
        $this->_db->query($sql);
        if ($this->_db->errno > 0) {
            die($this->_db->error . '<br>' . $sql);
        }
    }

    public function new()
    {
        $sql = "insert into matricula (codigo, titulo, abreviatura ) values('$_POST[codigo]', $_POST[titulo], $_POST[abreviatura])";
        $this->_db->query($sql);
        if ($this->_db->errno > 0) {
            die($this->_db->error . '<br>' . $sql);
        }
    }
    public function update()
    {
        $sql = "update  matricula set codigo='$_POST[codigo]', titulo=$_POST[titulo], abreviatura=$_POST[abreviatura] where id=$_POST[id]";
        $this->_db->query($sql);
        if ($this->_db->errno > 0) {
            die($this->_db->error . '<br>' . $sql);
        }
    }
}
