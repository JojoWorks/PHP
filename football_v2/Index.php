<!DOCTYPE html>
<html lang="en-UK">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO PHP Football</title>

    <link rel="stylesheet" href="football.css">
    <link rel="icon" type="images/x-icon" href="footballicon.png">
  </head>

  <body>
    <div id="hiddeninit">
          <?php

          spl_autoload_register('AutoLoader');

          function AutoLoader($className){
            $extension = ".php";
            $fullpath = $className . $extension;

            include_once $fullpath;
          }

          $France = new Pays("France","Française");
          $Allemagne = new Pays("Allemagne","Allemande");
          $Italie = new Pays("Italie","Italienne");
          $Espagne = new Pays("Espagne","Espagnole");
          $Portugal = new Pays("Portugal","Portugaise");
          $Angleterre = new Pays("Angleterre","Britannique");
          $Nigeria = new Pays("Nigeria","Nigeriane");
          $Cameroun = new Pays("Cameroun","Camerounaise");
          $PaysBas = new Pays("Pays-Bas","Néerlandais");



          $KylianMbappe = new Joueur("Kylian","Mbappé Lottin","20-12-1998");
          $KylianFR = new NatioJoueur($KylianMbappe, $France);

          $SylvainArmand = new Joueur("Sylvain","Armand","01-08-1980");
          $SylvainFR = new NatioJoueur($SylvainArmand, $France);

          $PabloSarabia = new Joueur("Pablo","Sarabia Garcia","11-05-1992");
          $PabloESP = new NatioJoueur($PabloSarabia, $Espagne);

          $EricAbidal = new Joueur("Éric Sylvain","Abidal","11-09-1979");
          $EricFR = new NatioJoueur($EricAbidal, $France);

          $AnthonyMartial = new Joueur("Anthony Jordan","Martial","05-12-1995");
          $AnthonyM_FR = new NatioJoueur($AnthonyMartial, $France);
          
          $JesseLingard = new Joueur("Jesse Ellise","Lingard","15-12-1992");
          $JesseLingardGB = new NatioJoueur($JesseLingard, $Angleterre);

          $AnderHerrera = new Joueur("Ander","Herrera Agüera","14-08-1989");
          $AnderHerreraESP = new NatioJoueur($AnderHerrera, $Espagne);
          // $AlexandreLacazette = new Joueur("Alexandre","Lacazette",$France,"28-05-1991");
          // $AnthonyLopes = new Joueur("Anthony","Lopes",$Portugal,"01-10-1990");
          // NatioJoueur::AddNatiojoueur($AnthonyLopes,$France);

          $AaronRamsdale = new Joueur("Aaron Christopher","Ramsdale","14-05-1994");
          $AaronRamsdaleGB = new NatioJoueur($AaronRamsdale, $Angleterre);

          $BukayoSaka = new Joueur("Bukayo Ayoyinka T.M","Saka","05-09-2001");
          $BukayoSakaNG = new NatioJoueur($BukayoSaka, $Nigeria);
          $BukayoSakaGB = new NatioJoueur($BukayoSaka, $Angleterre);

          $WilliamSaliba = new Joueur("William Alain André Gabriel","Saliba","24-03-2001");
          $WilliamSalibaFR = new NatioJoueur($WilliamSaliba, $France);
          $WilliamSalibaCMR = new NatioJoueur($WilliamSaliba, $Cameroun);
        

          $ManuelNeuer = new Joueur("Manuel Peter","Neuer","27-03-1986");
          $ManuelNeuerGER = new NatioJoueur($ManuelNeuer, $Allemagne);

          $BenjaminPavard = new Joueur("Benjamin Jacques Marcel","Pavard","28-03-1996");
          $BenjaminPavardFR = new NatioJoueur($BenjaminPavard, $France);

          $SergeGnabry = new Joueur("Serge David","Gnabry","14-07-1995");
          $SergeGnabryGER = new NatioJoueur($SergeGnabry, $Allemagne);

          $RaphaëlGuerreiro = new Joueur("Raphaël Adelino José","Guerreiro","22-12-1993");
          $RaphaëlGuerreiroPRT = new NatioJoueur($RaphaëlGuerreiro, $Portugal);

          $MarcoReus = new Joueur("Marco","Reus","31-05-1989");
          $MarcoReusGER = new NatioJoueur($MarcoReus, $Allemagne);

          $YoussoufaMoukoko = new Joueur("Youssoufa","Moukoko","20-11-2004");
          $YoussoufaMoukokoGER = new NatioJoueur($YoussoufaMoukoko, $Allemagne);
          $YoussoufaMoukokoCMR = new NatioJoueur($YoussoufaMoukoko, $Cameroun);

          $DaniCarvajal = new Joueur("Daniel","Carvajal Ramos","11-01-1992");
          $DaniCarvajalESP = new NatioJoueur($DaniCarvajal, $Espagne);

          $MarcoAsensio = new Joueur("Marco","Asensio Willemsen","21-01-1996");
          $MarcoAsensioESP = new NatioJoueur($MarcoAsensio, $Espagne);
          $MarcoAsensioNLD = new NatioJoueur($MarcoAsensio, $PaysBas);
          
          $JesùsVallejo = new Joueur("Jesùs","Vallejo Làzaro","05-01-1997");
          $JesùsVallejoESP = new NatioJoueur($JesùsVallejo, $Espagne);

          $Pedri = new Joueur("Pedro","Gonzàlez Lòpez","25-11-2002");
          $PedriESP = new NatioJoueur($Pedri, $Espagne);

          $FerranTorres = new Joueur("Ferran","Torres Garcia","29-02-2000");
          $FerranTorresESP = new NatioJoueur($FerranTorres, $Espagne);

          $IñakiPeña = new Joueur("Igancio","Peña Sotorres","02-03-1999");
          $IñakiPeñaESP = new NatioJoueur($IñakiPeña, $Espagne);










          $PSG = new Equipe("Paris Saint-Germain",$France,"1970");
          $KylianPSG = new EquiJoueur($KylianMbappe, "31-08-2017", $PSG);

          $ASMonaco = new Equipe("Association Monaco Football Club",$France,"1924");
          $KylianAS = new EquiJoueur($KylianMbappe, "02-12-2015", $ASMonaco);
          // $OL = new Equipe("Olympique Lyonnais",$France,"1950",$EricAbidal,"2004");

          $Manchester = new Equipe("Manchester United Football Club",$Angleterre,"1878");
          $AnthonyManchester = new EquiJoueur($AnthonyMartial, "12-09-2015", $Manchester);

          $Arsenal = new Equipe("Arsenal Football Club",$Angleterre,"1886");
          $AaronRamsdaleArsenal = new EquiJoueur($AaronRamsdale, "11-09-2021", $Arsenal);


          $FCBayern = new Equipe("FC Bayern Munich",$Allemagne,"27-02-1900");
          $ManuelFCBayern = new EquiJoueur($ManuelNeuer, "2011", $FCBayern);

          $BorussiaDortmund = new Equipe("Borussia Dortmund",$Allemagne,"19-12-1909");
          $RaphaëlBorussia = new EquiJoueur($RaphaëlGuerreiro,"22-08-2016", $BorussiaDortmund);

          $RealMadrid = new Equipe("Real Madrid Club de Fùtbol",$Espagne,"06-03-1902");
          $DaniRealMadrid = new EquiJoueur($DaniCarvajal,"18-08-2013", $RealMadrid);

          $FCBarcelona = new Equipe("Futbol Club Barcelona",$Espagne,"29-11-1899");
          $PedriFCBarcelona = new EquiJoueur($Pedri,"25-03-2021", $FCBarcelona);

          


          $SylvainPSG = new EquiJoueur ($SylvainArmand, "2004", $PSG); //Only the year is available.
          $PabloPSG = new EquiJoueur($PabloSarabia, "02-07-2019", $PSG);
          $AnderPSG = new EquiJoueur($AnderHerrera,"26-06-2019", $PSG);

          $EricAS = new EquiJoueur($EricAbidal, "2000", $ASMonaco);// Only the year is available.
          $AnthonyLopesAS = new EquiJoueur($AnthonyMartial,"30-11-2013", $ASMonaco);

          // EquiJoueur($AlexandreLavazette, "2008", $OL);
          // EquiJoueur($AnthonyLopes, "2012", $OL);

          $JesseManchester = new EquiJoueur($JesseLingard,"30-11-2011",$Manchester);
          $AnderManchester = new EquiJoueur($AnderHerrera,"14-09-2019", $Manchester);
          
          $BukayoArsenal = new EquiJoueur($BukayoSaka, "29-11-2018", $Arsenal);
          $WilliamArsenal = new EquiJoueur($WilliamSaliba,"25-07-2019", $Arsenal);

          $BenjaminFCBayern = new EquiJoueur($BenjaminPavard,"03-09-2019", $FCBayern);
          $SergeFCBayern = new EquiJoueur($SergeGnabry,"02-07-2018", $FCBayern);

          $MarcoBorussia = new EquiJoueur($MarcoReus, "18-09-2018",$BorussiaDortmund);
          $YoussoufaBorussia = new EquiJoueur($YoussoufaMoukoko,"21-11-2020",$BorussiaDortmund);

          $MarcoRealMadrid = new EquiJoueur($MarcoAsensio,"09-08-2016",$RealMadrid);
          $JesùsRealMadrid = new EquiJoueur($JesùsVallejo,"27-08-2016",$RealMadrid);

          $FerranFCBarcelona = new EquiJoueur($FerranTorres,"20-01-2022",$FCBarcelona);
          $IñakiPeñaFCBarcelona = new EquiJoueur($IñakiPeña, "02-03-1999",$FCBarcelona);


          // $PSG->ListeInfoEquipe();
          // $ASMonaco->ListeInfoEquipe();

          // $KylianMbappe->InfosJoueur();

          // EquiJoueur::ListeEquijoueur();

          // NatioJoueur::ListeNatioJoueur();

          // Pays::ListeEquipePays();

          ?>
    </div>

    <div id="container">
            <header>
                <div id="equipe_pays">
                      <?php
                        $France->listeEquipePays();
                        $Allemagne->listeEquipePays();
                        $Espagne->listeEquipePays();
                        $Angleterre->listeEquipePays();
                      ?>
                </div>
            </header>
            
            <main>
                <div id="joueurs_equipe">
                      <?php
                        $PSG->infoEquipe();
                        $RealMadrid->infoEquipe();
                        $Manchester->infoEquipe();
                        $FCBayern->infoEquipe();
                      ?>
                </div>
          </main>

          <footer>
                <div id="info_joueurs">
                      <?php
                        $KylianMbappe->infosJoueur();
                        $EricAbidal->infosJoueur();
                        $SergeGnabry->infosJoueur();
                        $MarcoAsensio->infosJoueur();
                      ?>
                </div>
            </footer>
    </div>
  </body>
</html>

