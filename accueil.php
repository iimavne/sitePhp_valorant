<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin vandal valorant</title>
        <!-- lien vers boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="site.css">
</head>
<body>
<!-- image en grand valorant	 -->
<div class="image-titre text-center">
<img  src="image/valorant.jpg" width="120" height="75" class="img-fluid"/><br>
</a>
    <h1> Valorant Skin </h1>  
 </div>   
<?php

 $bdd= "khamchouche_bd"; // Base de données 
 $host= "lakartxela.iutbayonne.univ-pau.fr";
 $user= "khamchouche_bd"; // Utilisateur 
 $pass= "khamchouche_bd"; // mp
 $tableSkinValo= "valorant_skin"; /* Connection bdd */ 
 //print "Tentative de connexion sur la bd <br>";
 $link=mysqli_connect($host,$user,$pass,$bdd) or die( "Impossible de se connecter à la base de 
données");

//recup donné de 
$query = "SELECT * FROM $tableSkinValo" ;
$result= mysqli_query($link,$query);
//creer une fonction qui va creer un fichier pour chaque skin d'arme
function creerFicherSkin($nom, $image,$type,$rarete,$prix) 
{

    $pageHtmlSkin = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Skin $nom</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
        <link rel='stylesheet' href='site.css'>
        
        </head>
    <body>
        <h1><div class='Nom-arme text-center'>Caractéristiques et informations sur le skin $nom </div></h1>

        <div class='elements-skin'>
        <ul>
             <li>Nom: $nom</li>
             <li>Type: $type</li>
             <li>Rareté: $rarete</li>
             <lI>Prix: $prix</li>
        </ul>
        <img src='$image' alt='$nom' width='120' height='75' class='m-3'><br>
        
        </div>
        <form ACTION='panier.php' METHOD='POST'>
        <!--creer un formulaire-->
                <input type ='submit' value='Ajouter au panier' name=ok>   
                inpuut hiden pour recupere l'id et le mettre dns le formulaire car hiden cache l'attribut à l'utilisateur    
            </form>
     
        <but
    </body>
    </html>
    ";

    $fichierSkinHTML = "$nom.html";//je creer mon fichier en fonction du nom de l'arme
        
    $fichierSkin = fopen($fichierSkinHTML, 'w');// Ouvrir le fichier en mode écriture
if ($fichierSkin) 
{
    fwrite($fichierSkin, $pageHtmlSkin);// Écrire le contenu de la variable pagehtmlskin dans le fichier  
    fclose($fichierSkin); // Fermer le fichier
}
else 
{
    echo "Impossible de creer le fichier  $fichierSkin";
}
}
echo "<div class='container'>";
echo "<div class='row'>"; // Ouvre la première ligne
$compteur = 0;

while ($donnees = mysqli_fetch_assoc($result)) { // Parcours chaque ligne de la base de données
    $nom = $donnees["nom"]; // Récupère le nom
    $image = $donnees["image"]; // Récupère l'image
    $type = $donnees["type"];
    $rarete = $donnees["rarete"];
    $prix = $donnees["prix"];

    echo "<div class='col-md-4 custom-padding'>"; // Utilise la classe personnalisée
        echo "<div class='lien-image mt-2'>"; // Ajoute une marge en haut
            print "<h2><a href='$nom.html'>$nom</a></h2>"; // Affiche le nom
        echo "</div>"; // Ferme le conteneur du lien

        echo "<div class='image-accueil images-accueil'>"; // Conteneur pour l'image
            print "<img src='$image' alt='$nom' width='270' height='100' class='m-3'>"; // Affiche l'image
        echo "</div>"; // Ferme le conteneur de l'image
    echo "</div>"; // Ferme la colonne

    $compteur++;

    // Vérifie si c'est un multiple de 3 pour fermer la ligne après trois éléments
    if ($compteur % 3 == 0) {
        echo "</div><div class='row'>"; // Ferme la ligne et ouvre une nouvelle
    }

    creerFicherSkin($nom, $image, $type, $rarete, $prix);
}

echo "</div>"; // Ferme le conteneur principal

    
    // while ($donnees = mysqli_fetch_assoc($result)) {
    //     $nom = $donnees["nom"];
    //     $image = $donnees["image"];
    //     creerFicherSkin($nom, $image);
    // }
    


//mysqli_close();
?>
</body>
</html>


