<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion des etudiant </title>
    <h1> Bonjour cher Etudiant :</h1>
    </br>
    <script>
function test(){
var cne=document.getElementByName("cne").value;
var nom=document.getElementByName('nom').value;
var prenom=document.getElementByName('prenom').value;
var dtn=document.getElementByName('dateNaissance').value;
var email=document.getElementByName('email').value;

let dateNaissance = new Date(dtn);
let dateActuelle = new Date();

let anneeActuelle = dateActuelle.getFullYear();
let anneeNaissance = dateNaissance.getFullYear();
let age = anneeActuelle - anneeNaissance;

if(cne == "" || nom == "" || prenom == "" ){
alert('champs obligatoire !!');
return true;}

if(age< 18 && age >23){
alert('erreur date !!');
return false;}

if(!email.includes('@')){
alert('email doit contenir @ ');
return false;}
else{
return true;}
}
    </script>
</head>
<body>
    <div class="main">
        <div >
<fieldset style="width:250px"> 

<form method="POST" action="inscription.php" >
   
<tr>

<label for="cne" style="color:red;">*</label>
<input type="text" name="cne" class="input" placeholder=" Cne....">

</tr></br></br>
<tr>
<label for="nom" style="color:red;">*</label>
<input type="text" name="nom" class="input" placeholder=" Nom....">
</tr></br></br>
<tr>
<label for="prenom" style="color:red;">*</label>
<input type="text" name="prenom" class="input" placeholder=" Prenom....">
</tr></br></br>
<tr>
<label for="dateNaissance" style="color:red;">*</label>
<input type="date" name="dateNaissance" class="input" placeholder=" dateNaissance....">
</tr></br></br>
<tr>
<label for="email" style="color:red;">*</label>
<input type="email" name="email" class="input" placeholder=" email....">
</tr></br></br>
</div>

<div >
<?php
require "connection.php";
echo" <table border=1>
<tr>
<th>Code Filiere</th>
<th>libelle</th>
<th>Votre choix</th>

</tr>
";
$req="select * from filiere";
$res=$cnx->query($req);
while($resultat=$res->fetch_assoc()){
    $codeF=$resultat['codeF'];
    $libelle=$resultat['libelle'];
    echo"
    <tr>
<td>$codeF</td>
<td>$libelle</td>
<td> <input name='check[]' type='checkbox' value='$codeF'></td>

</tr>
    ";
}
echo"</table>";
?>
</br></br>

<tr>
<td> <button type="submit" name="bnt1" onclick=" return test();">S'inscrire</button></td>
</tr></br></br>
<!-- <tr>
<td> <input type="reset" value="Reset"></td>
</tr></br></br> -->
</form>
</fieldset> 
</div>

</div>
</body>
</html>
