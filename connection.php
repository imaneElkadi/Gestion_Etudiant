<?php
$server='localhost';
$user='root';
$psw='';
$bd='Gestion_Etudiant';

$cnx= new mysqli($server,$user,$psw,$bd);
if($cnx->connect_error)
die("error:$cnx->connect_error");
else
echo"connect ok";



?>