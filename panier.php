<?php
session_start();
// include_once("bacoffice.php");
include_once("secure_host.php");

$erreur = false;


//tester quel action c'est 


$action = (isset($_POST['action']));
if($action == 'ajouter')
{
    //si action == ajouter 
// on ajoute le produit dans la session 
//et on liste les produit

}
// session_unset ();
// // On détruit notre session
// session_destroy ();
// // On redirige le visiteur vers la page d'accueil
// header ('location:accueil.php');

print "coucou";
// On détruit les variables de notre session

?>
<!-- //suprimer on creer un bouton sup dans lapage panier
//si action == supprimer 
//on enleve le produit de la session
// on liste les produit  -->




