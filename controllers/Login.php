<?php
/**
* Controlador de login
*/
namespace MatriculaMVC\Controller;

require_once '../app/Controller.php';
require_once '../models/Login.php';

class Login extends \MatriculaMVC\App\Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->_model = new \MatriculaMVC\Model\Login;
    }

    public function index()
    {
        require "../views/login/index.php";
    }
}
