<?php

abstract class Model implements nomage
{
     function __set($attr, $value) {
        $this->$attr = $value;
    }

    function __get($attr) {
        return $this->$attr;
    }

    function connexion() {
        return new PDO("mysql:host=Localhost; dbname=phpmvc","root","");
    }

    function all() {
        $db=$this->connexion(); //Recupere la connexion avec la db
        $table=strtolower(get_called_class()); //Recupere le nom de la table qui est egale au nom de class qui appel la fonction
        $ST=$db->prepare("Select * From $table"); //Selection la table et ST prend toutes les valeurs de la table
        $ST->execute();
        $array=[];
        while ($rqw=$ST->fetch(PDO::FETCH_ASSOC)){ //On passe dans toutes les lignes de la table une par une
            $model=get_called_class();
            $objet= new $model();
            foreach ($rqw as $key => $value){ //On passe dans toute les colonnes de la ligne selectionné
                $objet->$key=$value; //On rempli les champs de notre object avec chaque valeur de la ligne avec la variable correspondante dans l'objet
            }
            $array[]=$objet; //On sauvegarde l'object dans un tableau où il y aura toutes les lignes de la table stocké sous forme d'object
        }
        return $array;
    }

    function find($id) {
        $db=$this->connexion(); //Recupere la connexion avec la db
        $table=strtolower(get_called_class()); //Recupere le nom de la table qui est egale au nom de class qui appel la fonction
        $RSV=$db->prepare("Select * From $table Where id=:id"); //Requete SQL avec variables "id"
        $RSV->bindValue(":id",$id); //Trouver la valeur correspondant à la variable
        $RSV->execute();

        $LRS=$RSV->fetch(PDO::FETCH_ASSOC); //LRS = Ligne Requete SQL, tant qu'il y a des valeurs dans la ligne (on parcour toute la table)
        foreach ($LRS as $key => $value){ //On passe dans toute les colonnes de la ligne selectionné
            $this->$key=$value; //On rempli les champs de notre object avec chaque valeur de la ligne avec la variable correspondante dans l'objet
        }
        return $this; //On retourne l'objet
    }

    function Save() {
        $table = strtolower(get_called_class());
        $db=$this->connexion();
        $pk = $this->id;
        if($pk == Null) {
            $st = $db->prepare("insert into $table default VALUES returning id");
            $st->execute();
            $row = $st->fetch(PDD::FETCH_ASSOC);
            $this->id = $row["id"];
        }
        foreach ($this->fields as $field) {
            $st = $db->prepare("update $table set $field=Value WHERE id=:id");
            $st->bindValue("Value", $this->$field);
            $st->bindValue("id",$this->id);
            $st->execute();
        }
    }

    function delete()
    {
        $table = StrtoLower(get_called_class());
        $db=$this->connexion();
        $st = $db->prepare("DELETE FROM $table WHERE id=:id");
        $st->bindValue("id",$this->id);
        $st->execute();
        //$row=$st->fetch(PDO::FETCH_ASSOC);
        //$this->id=$row["id"];

    }

}
