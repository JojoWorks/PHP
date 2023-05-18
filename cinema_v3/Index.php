<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema POO</title>

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

    /*INDEX*/

    /*I create an autoloader and a function using it so that everytime a class is called within file, it will search the container folder for a file that fits the classes' name, and load it. The function has to be modified depending of where your classes are stored.
    The class names MUST MATCH their containing files or this entire function does not work*/

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className) {
        $extension = ".php";
        $fullpath = $className . $extension;

        include_once $fullpath;
    }

    /*I initialize the roles and genre so they're ready to collect information*/
    $ActionAventure = new GenreFilm("Action/Aventure");
    $Superhero = new GenreFilm("Super-héro");

    /*I create two directors */
    $EdgarWright = new Realisateur("Edgar","Wright","masculin","18-04-1974");
    $SamRaimi = new Realisateur("Samuel Marshall","Raimi","masculin","23-10-1959");

    /*I then create 6 actors, 2 are for Spiderman(2002), 2 others are for Scott Pilgrim Vs The World another one is a duplicate for testing casting, and Tom Holland is for testing the role liste*/
    $TobeyMaguire = new Acteur("Tobey Vincent","Maguire","Masculin","27-06-1975");
    $WillemDafoe = new Acteur("William James","Dafoe","Masculin","22-08-1955");
    $WillemDafoe2 = new Acteur("William James2","Dafoe2","Masculin","22-08-1955");
    $TomHolland = new Acteur("Thomas Stanley","Holland","Masculin","01-06-1996");

    $MichaelCera = new Acteur("Michael Austin","Cera","Masculin","7-06-1988");
    $MaryElizabethWinstead = new Acteur("Mary Elizabeth","Winstead","Masculin","28-11-1984");


    /*I display basic personnal information of both directors */
    $EdgarWright->affichageInfo();
    $SamRaimi->affichageInfo();


    /*I initialize their films*/
    $SpiderMan = new Film("Spiderman (2002)", $ActionAventure, $SamRaimi,"12-06-2002","121","Orphelin, Peter Parker est élevé par sa tante May et son oncle Ben dans le borough de Queens à New York. Il est victime d'humiliations de la part de ses camarades de lycée, sauf de son meilleur ami Harry Osborn, qui le défend. Après avoir été mordu par une araignée génétiquement modifiée, qui s'était échappée d'un laboratoire qu'il visitait avec sa classe, il se découvre des pouvoirs surhumains (une force et une agilité hors du commun, la capacité d’adhérer aux parois (uniquement avec pieds et mains) ainsi qu'un « sens d'araignée » l'avertissant des dangers imminents).");

    
    $SpiderMan->addGenre($Superhero);

    $ScottPilgrimVsTheWorld = new Film("Scott Pilgrim vs The World", $ActionAventure, $EdgarWright, "01-12-2010","112","Scott Pilgrim, un jeune homme de 22 ans, bassiste à Toronto, sort avec Knives, une lycéenne de 17 ans au grand dam de ses amis. Lors d’un de ses rendez-vous, il a la vision d’une jeune femme en roller aux cheveux roses, Ramona Flowers, dont il tombe amoureux. La sachant livreuse, il passe une commande sur Internet pour la revoir et parvient à la séduire assez pour qu’elle lui donne un premier rendez-vous. Wallace, son ami chez qui il squatte, lui impose de rompre avec Knives en premier lieu mais Scott ne l’écoute pas. Il est défié par mail par un inconnu mais il ne prête pas attention à la chose. ");

    /*I add a role to the Roles object*/
    $PeterParker = new Role("Peter Parker/Spider-Man");
    $NormanOsborn = new Role("Norman Osborn/Green Goblin");

    /*I then create a cast for Spiderman and add the actors and their respective roles, WillemDafoe2 being for testing purposes*/
    $PeterParker2002= new Casting($SpiderMan, $TobeyMaguire, $PeterParker);
    $NormanOsborn2002= new Casting($SpiderMan, $WillemDafoe, $NormanOsborn);

    /*I add Tom Holland seperately manually to the role list as an actor that has player as Peter Parker/Spider-Man but did not play in Spiderman(2002)*/
    // $PeterParker->addActeur($TomHolland);

    // /*I repeat the same process for Scott Pilgrim*/
    $ScottPilgrim = new Role("Scott Pilgrim");
    $Ramona = new Role("Ramona Victoria Flowers");

    $ScottPilgrimCasting = new Casting($ScottPilgrimVsTheWorld, $MichaelCera, $ScottPilgrim);
    $RamonaCasting = new Casting($ScottPilgrimVsTheWorld, $MaryElizabethWinstead, $Ramona);



    /*I then display every related acteur and realisateur's filmography*/
    $SamRaimi->filmographie();
    $TobeyMaguire->filmographie();
    $WillemDafoe->filmographie();

    $SpiderMan->infoFilm();
    $ScottPilgrimVsTheWorld->infoFilm();

    $EdgarWright->filmographie();
    $MichaelCera->filmographie();
    $MaryElizabethWinstead->filmographie();

    $ActionAventure->listeFilms();
    $SpiderMan->listeCast();

    $PeterParker->listeActeursRole();


    ?>

    </body>
</html>