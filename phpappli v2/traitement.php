<?php

session_start();
switch ($_POST) {
  case (isset($_POST["submit"])) :

  $nom_produit = filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING);
  $prix_produit = filter_input(INPUT_POST,"price",FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
  $quantité_produit = filter_input(INPUT_POST, "quantity",FILTER_VALIDATE_INT);

  if ($nom_produit && $prix_produit && $quantité_produit) {
    $product = [
      "name" => $nom_produit,
      "price" => $prix_produit,
      "quantity" => $quantité_produit,
      "total" => $prix_produit*$quantité_produit
    ];

  $_SESSION["products"][] = $product;
  $_SESSION["feedback"] = "$quantité_produit $nom_produit au prix de ". number_format($prix_produit, 2, ",", "&nbsp;") ."&nbsp; € a bien été ajouté au panier";
    
  } else {
    $_SESSION["feedback"] = "Aucun produit n'as été ajouté";
  }

  header("Location:index.php");
  break;


  case  (isset($_POST["supprSession"])) :
    unset($_SESSION["products"]);
    unset($_SESSION["totalg"]);
    $_SESSION["feedback"] = "Suppression de tout les produits effectué<br>";
    // header("Location:index.php");
    break;

  case  (isset($_POST["delproduit"])) : 
      $search = "". filter_input(INPUT_POST,"supprProduit",FILTER_SANITIZE_STRING) ."";
      if ($search) {
        foreach ($_SESSION["products"] as $key => $product) {
          if (array_search($search,$product)){
            unset($_SESSION["products"][$key]);
            $_SESSION["feedback"] = 'Suppression de '. $search ." effectué <br>";
          }
      }
    }
  
  header("Location:recap.php");
  break;


 case (isset($_POST["plusqtt"])):
  $_SESSION["products"][''. $_POST["plusqtt"] .'']["quantity"]+=1;

  $_SESSION["products"][''. $_POST["plusqtt"] .'']["total"] = 
  $_SESSION["products"][''. $_POST["plusqtt"] .'']["quantity"] * $_SESSION["products"][''. $_POST["plusqtt"] .'']["price"];

  header("Location:recap.php");
  break;




 case (isset($_POST["minusqtt"])):
  $_SESSION["products"][''. $_POST["minusqtt"] .'']["quantity"]-=1;

  $_SESSION["products"][''. $_POST["minusqtt"] .'']["total"] = 
  $_SESSION["products"][''. $_POST["minusqtt"] .'']["quantity"] * $_SESSION["products"][''. $_POST["minusqtt"] .'']["price"];

  header("Location:recap.php");
  break;
}

if(!isset($_SESSION["products"])|| empty($_SESSION["products"])) {
  $_SESSION["totaldisplay"] = "Pas de total disponible pour cette session";
} else {
  null;  
}

// else {

//   header("Location:index.php");
// }




?>