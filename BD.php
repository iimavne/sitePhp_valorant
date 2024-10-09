<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin vandal valorant</title>
</head>
<body>
<a href="https://th.bing.com/th/id/OIP.kxtVdAFwm8nZBNV2YztZogHaEK?rs=1&pid=ImgDetMain">
	<img alt="texte alternatif pour le lien image" src="valorant.jpg" width="120" height="75" />
</a>
    //
</body>
</html>
<?php
 $bdd= "khamchouche_bd"; // Base de données 
 $host= "lakartxela.iutbayonne.univ-pau.fr";
 $user= "khamchouche_bd"; // Utilisateur 
 $pass= "khamchouche_bd"; // mp
 $tableSkinValo= "valorant_skin"; /* Connection bdd */ 
 print "Tentative de connexion sur la bd <br>";
 $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de 
données");

//recup donné de 
$query = "SELECT * FROM $tableSkinValo" ;
$result= mysqli_query($link,$query);

 while ($donnees=mysqli_fetch_assoc($result)) { //tableau avc tt les champs et leur données
       $ville=$donnees["nom"];//on recup les donnée du champ ville
       $indice=$donnees["image"];//on recup les donnée de la table indice
       print "$nom ";
       print "$image <br>";
}
   
mysqli_close( )
?>