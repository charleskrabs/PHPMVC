<?php
$app = new App();
$app->route("","SiteController","index");
$app->route("home","SiteController","index");

$app->route("listVehicule", "VehiculeController", "liste");
$app->route("deleteVehicule", "VehiculeController", "Suppr");
$app->route("modifyfenVehicule", "VehiculeController", "modifyfenetre");
$app->route("modifyVehicule", "VehiculeController", "Modify");
$app->route("CreateVehicule", "VehiculeController", "Create");
$app->route("AddVehicule", "VehiculeController", "Add");

$app->route("listMarque", "MarqueController", "liste");
$app->route("deleteMarque", "MarqueController", "Suppr");
$app->route("modifyfenMarque", "MarqueController", "modifyfenetre");
$app->route("modifyMarque", "MarqueController", "Modify");
$app->route("CreateMarque", "MarqueController", "Create");
$app->route("AddMarque", "MarqueController", "Add");

$app->route("View","ViewController","index");
