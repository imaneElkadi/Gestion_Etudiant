<?php
require "connection.php";
$cne=$_POST['cne'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$dtn=$_POST['dateNaissance'];
$email=$_POST['email'];
$year= date("Y");
$req2="insert into etudiant values('$cne','$nom','$prenom','$dtn','$email')";
$cnx->query($req2);

  if(isset($_POST['check'])){
    foreach($_POST['check'] as $codef)
    {
        $req="insert into preinscription(cne,codeF,annee) values('$cne','$codef',$year)";
        $cnx->query($req);
    }
}
echo"votre inscription a ete bien etablis.<br>";
echo"<a href='index.php' style='text-decoration:none; color:purple;'> revenir a la page principale </a>";
?>