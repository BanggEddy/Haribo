<?php
        session_start();

        include "fonctions.php";
        $bdd = connect();

        $choix = $_GET["choix"];
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $image = $_POST['image'];



        $sql = "update produit SET nom ='$nom', prix ='$prix', photo='$image' WHERE id='$choix'" ;

        $resultat=$bdd->query($sql);

        echo $sql;

        header("location:modifier.php");
?>
