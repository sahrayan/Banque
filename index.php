<?php
require_once "Compte.php";
require_once "Titulaire.php";




$titulaire1 = new Titu('RAIHANI ','Rayan ',"27-01-2004 ",'Strasbourg');
echo $titulaire1;

$compte1 =new Compte(14,0,"AED",$titulaire1);
$compte1->Crediter(50);
$compte1->Debit(10);








?>