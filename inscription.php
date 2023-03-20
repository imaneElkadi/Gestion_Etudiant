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

if( isset($_POST['check']) && isset($_POST['choice_order'])){
 
  $choices = $_POST['check'];
  $choice_order = $_POST['choice_order'];

  echo "<h2 >Student $cne selected the following choices in order:</h2>";
  for($i=0; $i<count($choices); $i++){
    // sort($order);
    $choice = $choices[$i];
    $order = $choice_order[$i];
  
    echo "<h3><br>$choice (Order: $order)</h3>";
  }
}


echo"</br></br></br>";
echo"<a href='index.php' style='text-decoration:none; color:purple;'> revenir a la page principale </a>";
?>