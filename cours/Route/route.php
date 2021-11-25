<?php
$app = new App();
$app->route("","SiteController","index");
$app->route("home","SiteController","index");
$app->route("listVehicule", "VehiculeController", "liste");
$app->route("deleteVehicule", "VehiculeController", "Suppr");
$app->route("modifyfenVehicule", "VehiculeController", "modifyfenetre");
$app->route("modifyVehicule", "VehiculeController", "Modify");
$app->route("View","ViewController","index");
