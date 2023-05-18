<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo POO Livres</title>

    <style>
        body {
            background-color: hsl(230,42%,12%);
            color: hsl(0,0%,90%);
            font-family: Trebuchet MS;
            font-size: 24px;
        }
        table, th, td, tr {
            border: 4px solid hsl(230,42%,12%);
            background-color: hsla(0,0%,60%,5%);
            text-align: center;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
    <body>
        <?php
        echo "<h2>Exo POO Livres</h2>
        <br>
        <br><br>
        <br>Créer un POO pour gérer les livres et leurs auteurs respectifs
        <br>********************************************************************************************************************************************
        <br><br><br>";


        include("Auteur.php");
        include("Livre.php");
        /*Dans cette example, je crée un nouvel objet auteur, j'utiliser __toString(), j'affiche la bibliographie qui est pour l'instant vide, j'ajouter des oeuvres à celle-ci, les affiches, en supprime une, et affiche le résultat*/
        $auteur = new Auteur("Stephen","King");
        echo "$auteur <br><br>";

        $auteur->afficherBibliographie();
        $Simetierre = new Livre($auteur, "Simetierre", 1983, 374, 15);
        $Ca = new Livre($auteur, "Ca", 1986, 1138, 20);
        $LeFleau = new Livre($auteur, "Le Fléau", 1978, 823, 14);
        

        $auteur->afficherBibliographie();

        $auteur->remove_book_biblio($auteur, $LeFleau);

        $auteur->afficherBibliographie();

        ?>


    </body>
</html