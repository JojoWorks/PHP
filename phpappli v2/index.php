<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <title>Ajout produits</title>

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
        session_start();
        echo "<p>". $_SESSION["totaldisplay"] ."</p>";
        echo "<p>". $_SESSION["feedback"] ."</p>";
        $_SESSION["feedback"] = "";
        ?>
    </p>
  </div>

  <div id="container">
      <h1>Ajouter un produit</h1>

          <form action="traitement.php" method="POST">
                <label for="name">
                  Nom du produit:
                  <br>
                  <input type="text" id="name" name="name" required>
                </label>
                <br><br>
                <label for="price">
                  Prix du produit:
                  <br>
                  <input type="number" step="any" id="price" name="price" required>
                </label>
                <br><br>
                <label for="quantity">
                  Quantité désirée:
                  <br>
                  <input type="number" id="quantity" name="quantity" value="1">
                </label>
                <br><br>

                <button type="submit" name="submit">
                  <p>Ajouter ces produits</p>
                </button>
          </form>

  </div>




  </body>
</html>