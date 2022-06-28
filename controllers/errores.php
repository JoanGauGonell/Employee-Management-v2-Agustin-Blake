<?php

class Errores extends Controller{

    function __construct()
    {
        parent::__construct();
        echo "<p>Error al cargar recurso</p>";
        $this->view = new View();
        $this->view->render('errores/index');
    }
}