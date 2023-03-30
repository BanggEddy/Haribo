<?php
session_start() ;
if (isset($_SESSION['autorisation']) and $_SESSION['autorisation']=="OK"){
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Jquery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  </head>


  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="indexadmin.php"><img src="Images/logo-haribo.jpg" height="100" width="100" alt="..."></a>
        <div class="btn-group">
          <a href="ajouter.php" class="btn btn-primary" aria-current="page">Ajouter</a>
          <a href="modifier.php" class="btn btn-primary">Modifier</a>
          <a href="supprimer.php" class="btn btn-primary">Supprimer</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          <div class="container-fluid">
            <form class="d-flex" method="POST" action='recherche.php'>
              <input class="form-control me-2" type="search" placeholder="Rechercher des bonbons" aria-label="Recherche" name="recherche">
              <input class="btn btn-outline-success" type="submit" value="Rechercher" >
            </form>
          </div>
        </div>
      </div>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Deconnexion
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deconnexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Vous etes sur de vous deconnecter ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <a class="btn btn-danger" href="logout.php" role="button">Deconnexion</a>
      </div>
    </div>
  </div>
</div>
    </nav>


    <?php

        $choix = $_GET["choix"];

        $sql = "select * from produit where id=$choix";

        $_SESSION["choix"] = $choix;

        include "fonctions.php";
        $bdd = connect();

        $resultat=$bdd->query($sql);

        $produit = $resultat->fetch(PDO::FETCH_OBJ);

            echo "<form method='POST' action='secure_update.php?choix=$choix'>
            <div class='form-group'>
                <label for='formGroupExampleInput'>Nom du produit : </label>
                <input type='text' class='form-control' id='formGroupExampleInput' placeholder='nom du bonbon' name='nom' value='$produit->nom'>
            </div>
            <div class='form-group'>
                <label for='formGroupExampleInput2'>Prix du produit : </label>
                <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='prix du bonbon' name='prix' value='$produit->prix'>
                <label for='formGroupExampleInput2'>Image du produit : </label>
                <br>
                <input type='file' name='image' accept=''>
                <br><br>
                <button type='submit' class='btn btn-primary'>Enregistrer</button>

            </div></form>";

?>













<script src="to-top.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php
}
?>
  </body>
</html>
