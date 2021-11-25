<?php

class Vehicule extends Model
{
    protected $id;
    protected $couleur;
    protected $modele;
    protected $nom;
    protected $nbporte;

    protected $fields=["id", "couleur", "modele", "nom", "nbporte"];
}