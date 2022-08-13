<?php
//appel du fichier contenant les infos de connexion
include "config.php" ;
//fonction de connexion
function connect()
{
    try
    {
        $connect= new PDO('mysql:host='.HOTE.';dbname='.BDD , UTILISATEUR, MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8')) ;
    }
    catch(PDOException $e)
    {
        echo "problème de connexion à la BDD <br>". $e->getMessage();
    }

    return $connect;
}

?>
