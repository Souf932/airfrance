<?php

$host='localhost';
$port=3306;
$dbname='airfrance_bdd';
$user='airfrance';
$pwd='Soufiyen93oumi';

try {
    $newBD=new PDO('mysq:host=$host; port=$port;dbname=$dbname',$user,$pwd);
    echo "connexion etablie";
}catch(PDOExecption $e){
    die ('Erreur :'.$e->getMessage());

}


if (isset($_POST['login'])&&(isset($_POST['mdp']))   {
                     $insertion=$newBD->prepare('INSERT INTO utilisateur VALUES(NULL,
                     :login,:mdp)');
        
        $insertion->bindValue(':login',$_POST['login']);
        $insertion->bindValue(':mdp',$_POST['mdp']);
        
        $verification=$insertion->execute();

        if ($verification){
            echo "insertion reussie";
        }

}else{
echo "Une variable n'est pas declaree ou est null";

}




