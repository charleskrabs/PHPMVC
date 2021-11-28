<?php

class MarqueController extends Controller {

    function liste() {
        $V = new Marque();
        $marque=$V->all();
        $this->View("listMarque", $marque);
    }

    function Save(){
        $V = new Marque();
        $marque = $V->Save();
        $this->View("home");
    }

    function Suppr(){
        $V = new Marque();
        $vehicle=$V->find($_GET['id']) ;
        $vehicle->delete();
        header('location:?route=listMarque');
    }

    function Modifyfenetre(){
        $V = new Marque();
        $marque=$V->find($_GET['id']);
        $this->View("modifyMarque", $marque);
    }

    function Modify(){
        $V = new Marque();
        $marque=$V->find($_GET['id']);
        $marque->Setnom($_POST["marque"]);
        $marque->Save();
        header('location:?route=listMarque');
    }

    function Create(){
        $this->View("CreateMarque");
    }

    function Add(){
        $V = new Marque();
        $V->Setnom($_POST["nom"]);
        $V->Save();
        header('location:?route=listMarque');
    }

}