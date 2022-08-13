<?php
include "fonctions.php";
if(!isset($_SESSION['panier']))
{
$_SESSION['pannier']=array() ;//création de la variable de session
}
if(isset($_SESSION['panier'][$id]))
{
$_SESSION['panier'][$id]++;//ajoute 1 à la quantité
}
else
{
$_SESSION['panier'][$id]=1;//sinon met un dans la quantité
}

header("location:panier.php");
?>

