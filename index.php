<?php
require_once "Compte.php";
require_once "Titulaire.php";




$titulaire1 = new Titu('RAIHANI ','Rayan ',"27-01-2004 ",'Strasbourg');
$compte1 =new Compte("Livret B",500,"AED",$titulaire1);
$compte2 =new Compte("Livret A",20,"euro",$titulaire1);
$titulaire1->DispInfo();

$compte1->Virement($compte2,10) 










?>