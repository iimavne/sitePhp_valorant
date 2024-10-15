<?php 


// include 'bootstrap.php';
// include 'bd.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $id= $_POST['id'];
//     $titre = $_POST['titre'];
//     $rarete = $_POST['rarete'];
//     $prix = $_POST['prix'];
//     $image = $_FILES['image']['id'];

// }
//créer un panier
function creationPanier(){
    if (!isset($_SESSION['panier'])){
       $_SESSION['panier']=array();
       $_SESSION['panier']['nom'] = array();
       $_SESSION['panier']['rarete'] = array();
       $_SESSION['panier']['prix'] = array();
    //    $_SESSION['panier']['verrou'] = false;
    }
    return true;
 }
 


//ajouter un panier



//supprimer un panier


