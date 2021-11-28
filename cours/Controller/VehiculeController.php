<?php

class VehiculeController extends Controller {
    function index() {
        $this->View("Vehicule");
    }
    function liste() {
        $V = new Vehicule();
        $vehicules=$V->all();
        $this->View("listVehicule", $vehicules);
    }

    function Save(){
        $V = new Vehicule();
        $vehicule = $V->Save();
        $this->View("home");
    }

    function Suppr(){
        $V = new Vehicule();
        $vehicle=$V->find($_GET['id']) ;
        $vehicle->delete();
        header('location:?route=listVehicule');
    }

    function Modifyfenetre(){
        $V = new Vehicule();
        $vehicle=$V->find($_GET['id']);
        $this->View("modifyfenetre", $vehicle);
    }

    function Modify(){
        $V = new Vehicule();
        $vehicule=$V->find($_GET['id']);
        $vehicule->SetCouleur($_POST["couleur"]);
        $vehicule->SetModele($_POST["modele"]);
        $vehicule->SetNbporte($_POST["nbporte"]);
        $vehicule->Save();
        header('location:?route=listVehicule');
    }

    function Create(){
        $this->View("CreateVehicule");
    }

    function Add(){
        $V = new Vehicule();
        $V->SetCouleur($_POST["couleur"]);
        $V->SetModele($_POST["modele"]);
        $V->SetNbporte($_POST["nbporte"]);
        $V->Save();
        header('location:?route=listVehicule');
    }




    /*function index() {
        include_once "View/header.php";
        include_once "View/Vehicule.php";
        include_once "View/footer.php";
    }
    function List() {
        include_once "View/header.php";
        include_once "View/Vehicule.php";
        include_once "View/footer.php";
    }*/
}