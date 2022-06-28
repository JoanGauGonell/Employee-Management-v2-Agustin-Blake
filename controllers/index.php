<?php

class Index extends Controller{
    function __construct(){
        parent::__construct();

    }

    function render(){
        $this->view->render('index/index');
    }

    function saludo(){
        echo "<p>Hola a todos<p>";
    }
}

?>