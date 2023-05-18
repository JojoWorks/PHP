<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en-GB">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>

    <link rel="stylesheet" href="produits.css">

  </head>
  <body>
  <nav>
    <a href="index.php" title="Page principale pour ajouter les produits">Index</a>
    <a href="recap.php" title="Page pour tout les produits ajoutés sur cette session">Récapitulatif</a>

  </nav>


  <div id="feedback">
    <p>
        <?php
        echo "<p>". $_SESSION["totaldisplay"] ."</p>";
        echo "<p>". $_SESSION["feedback"] ."</p>";
        $_SESSION["feedback"] = "";
        ?>
    </p>
  </div>


    <div id="container">
        <?php

          if(!isset($_SESSION["products"])|| empty($_SESSION["products"])) {
            echo "<p>Aucun produits trouvé dans session</p>";
          } else {
                echo "<table>",
                      "<thead>",
                        "<tr>",
                          "<th>#</th>",
                            "<th>Nom</th>",
                            "<th>Prix</th>",
                            "<th>Quantité</th>",
                            "<th>Total</th>",
                        "</tr>",
                      "</thead>",
                      "<tbody>",
                      '<form action="traitement.php" method="POST">';
                $totalGeneral = 0;
                
              foreach($_SESSION["products"] as $index => $product) {

                echo '
                <tr><td>'.$index.'</td>
                          <td>'. $product['name'] ."</td>
                          <td>". number_format(floatval($product['price']), 2, ",", "&nbsp;") .'&nbsp;€</td>
                          <td>
                          <button type="submit" name="plusqtt" value="'. $index. '">
                          + </button>
                          '.

                          $product['quantity']

                          .'
                           <button type="submit" name="minusqtt" value="'. $index. '">
                          - </button>
                          </td>
                          <td>'.                          
                          number_format(floatval($product['total']), 2, ",", "&nbsp;") ."&nbsp;€</td>
                      </tr>";
                      $totalGeneral += floatval($product["total"]);
              }
             echo "</form>";

              $_SESSION["totaldisplay"] = "Total pour cette session : ". number_format($totalGeneral, 2, ",", "&nbsp;") ."&nbsp;€";

                  echo '<tr>
                        <td colspan="4">Total général : </td>
                        <td><b>'. number_format($totalGeneral, 2, ",", "&nbsp;") ."&nbsp;€</b></td>
                        </tr></tbody></table>";



          }
        
        ?>

        <br><br>

        <form action="traitement.php" method="POST">
              <label for="supprProduit">
                Insérer le nom d'un produit à supprimer :
                <br>
                <input type="text" id="supprProduit" name="supprProduit">
              </label>
              <br><br>
                <button type="submit" name="delproduit">
                  <p>Supprimer ce produit</p>
                </button>

          <br><br>

              <button type="submit" name="supprSession">
                <p>Supprimer tout les produits</p>
              </button>
        </form>

        

        

  </div>




  </body>
</html>