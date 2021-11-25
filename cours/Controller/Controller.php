<?php

class Controller {
    function View($view, $data=null) {
        include_once "View/header.php";
        include_once "View/".$view.".php";
        include_once "View/footer.php";
    }
}