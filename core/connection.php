<?php

try{

// A changer : dbname=nomDeVotreBaseDeDonnées
$bdd = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
}
// On traite l'erreur (ex probleme de mot de passe, php rsique d'afficher
// toute la ligne. Pour éviter ce problème : )
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
// Notre requete à la base de donnée


$tasks_todo = $bdd->query("SELECT * FROM task WHERE `task_ended_on_timestamp` = ''");
$tasks_done = $bdd->query("SELECT * FROM task WHERE `task_ended_on_timestamp` < `task_end_timestamp`");
$tasks_late = $bdd->query("SELECT * FROM task WHERE `task_ended_on_timestamp` > `task_end_timestamp`");


//$tasks_donelate = $bdd->query('SELECT * FROM task WHERE task_end_timestamp <= task_ended_on_timestamp');

?>