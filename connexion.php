<?php
session_start();
// <!-- page de saisi utilisateur de connexion -->

 // On définit un login et un mot de passe de base 
$login_valide = "moi";
$pwd_valide = "moi";
// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['pwd'])) 
{
    // on vérifie les informations saisies
    if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd'])
     {
    
    // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pwd'] = $_POST['pwd'];
    // on redirige notre visiteur vers une page de notre section membre 
    header ('location:panier.php');
    }
        else 
        {
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        // puis on le redirige vers la page de connexion
        echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';
        }
}
// else 
// {
//     echo 'Les variables du formulaire ne sont pas déclarées.';
// }
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire d'identification</title> 
</head>
<body>
<form action="connexion.php" method="post">
Votre login : <input type="text" name="login">
<br />
Votre mot de passe : <input type="password" name="pwd"><br />
<input type="submit" value="Connexion">
</form>
</body>
</html>



<!-- //PAGE DE CONNEXION FORMULAIRE -->