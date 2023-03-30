  <?php 
  session_start();
$id=$_POST["id"];
$mdp=md5($_POST["mdp"]);


  //conexion à la BDD
  require "fonctions.php";
  $bdd=connect();


$sql="select * from admin where login='$id' and mdp='$mdp'";


$resultat=$bdd->query($sql) ;


if($nb_lignes=$resultat->rowCount()==0){

    header("Location:index.php");

}

else{
    $_SESSION["autorisation"]="OK";
    header("Location:indexadmin.php");

}


?>
