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
alert("helooe bitch");
}
    </script>
</head>
<body>
    <div class="main">
        <div >
<fieldset style="width:250px"> 

<form method="POST" action="inscription.php" onsubmit=" return test()">
   
<tr>


<input type="text" name="cne" class="input" placeholder=" Cne....">

</tr></br></br>
<tr>

<input type="text" name="nom" class="input" placeholder=" Nom....">
</tr></br></br>
<tr>

<input type="text" name="prenom" class="input" placeholder=" Prenom....">
</tr></br></br>
<tr>

<input type="date" name="dateNaissance" class="input" placeholder=" dateNaissance....">
</tr></br></br>
<tr>

<input type="text" name="email" class="input" placeholder=" email....">
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
<td> <button type="submit" name="bnt1">S'inscrire</button></td>
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
