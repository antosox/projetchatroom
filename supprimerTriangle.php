<?php
$titre = "Supprimer Triangle";

include_once 'Config.php';
include_once 'Classes/Point.php';
include_once 'Classes/Polygone.php';
include_once 'Classes/Triangle.php';
include_once 'header.php';

$id=$_GET['id'];
$tri=Triangle::getTriangle($id);
$tri->Supprimer();

header("location: index.php");
die();