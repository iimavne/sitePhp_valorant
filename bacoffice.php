<?php 
session_start();

include 'bootstrap.php';
include 'bd.php';

if (!isset($_SESSION['user']) || $_SESSION['role'] != 'admin') {
    header('Location: connexion.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id= $_POST['id'];
    $titre = $_POST['titre'];
    $rarete = $_POST['rarete'];
    $prix = $_POST['prix'];
    $image = $_FILES['image']['id'];

}
