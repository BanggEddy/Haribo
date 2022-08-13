<?php
session_start() ;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>


  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="Images/logo-haribo.jpg" height="100" width="100" alt="..."></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          <div class="container-fluid">
            <form class="d-flex" method="POST" action='recherchevisi.php'>
              <input class="form-control me-2" type="search" placeholder="Rechercher des bonbons" aria-label="Recherche" name="recherche">
              <input class="btn btn-outline-success" type="submit" value="Rechercher" >
            </form>
          </div>
        </div>
      </div>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
Administration
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Administration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="admin.php">

        <label> Identifiant : </label> <input type="text" placeholder="Votre  Identifiant" name="id">
        <br>
        <label> Mot De Passe : </label> <input type="password" placeholder="Votre  Mot De Passe" name="mdp">
        <br>
        <input type="submit" value="Valider" class='btn btn-danger'>
        </form>
        </div>
    </div>
  </div>
</div>
    </nav>



<?php
//conexion à la BDD
include "fonctions.php";
$bdd=connect();



//requête
$recherche = strtoupper($_POST['recherche']);
$sql="select * from produit where upper (nom) like '%$recherche%'" ;

//execution de la requête
$resultat=$bdd->query($sql) ;

//affichage des resultats dans un objet
while($produit = $resultat->fetch(PDO::FETCH_OBJ))
  {
    ?>
    <div class='card' style='width: 15rem;'>
      <img src="Images/<?php echo $produit->photo ?>" max-height: 182px>
      <div class='card-body'>
        <h5 class='card-title'><?php echo $produit->nom ?></h5>
        <p class="card-text"><?php echo $produit->prix?> € </p>
        <a href="#" class="btn btn-primary">Buy</a>
      </div>
    </div>
  <?php
  }
  ?>

<div id="scrollUp">
        <a href="#top"><img src="Images/imagefleche.png"/></a>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="to-top.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
