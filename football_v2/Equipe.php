<?php

class Equipe {
    /*Attributes*/
    private string $nom_equipe;
    private Pays $pays_equipe;
    /* Equipe get pays*/
    private DateTime $date_de_creation;
    private array $liste_joueurs;

    /*Constructor*/

    public function __construct($nom_equipe,Pays $pays_equipe, $date_de_creation){
        $this->nom_equipe = $nom_equipe;
        $this->pays_equipe = $pays_equipe;
        $pays_equipe->addEquipe($this);
        
        $this->date_de_creation = new DateTime($date_de_creation);
        $this->liste_joueurs = [];

    }

    /*Getters/Setters*/

    public function getNomEquipe(){
        return $this->nom_equipe;
    }
    public function setNomEquipe($nom_equipe){
        $this->nom_equipe = $nom_equipe;
    }

    public function getPaysEquipe(){
        return $this->pays_equipe;
    }
    public function setPaysEquipe($pays_equipe){
        $this->pays_equipe = $pays_equipe;
    }

    public function getDateDeCreation(){
        return $this->date_de_creation;
    }
    public function setDateDeCreation($date_de_creation){
        $this->date_de_creation = new DateTime($date_de_creation);
    }

    /*Methods*/

    public function addJoueur(EquiJoueur $joueur) {
        if (!in_array($joueur, $this->liste_joueurs)) {
        $this->liste_joueurs[] = $joueur;
        echo "<br> $joueur a été ajouté à l'équipe.";
        } else {
            echo "<br>$joueur est déjà dans cette équipe.";
        }
    }

    public function infoEquipe(){
        echo'<div id="'. str_replace(" ","",$this->nom_equipe) .'">';
        echo"<h3>". $this->nom_equipe .":</h3>
        <br><p>Représente le pays ". $this->pays_equipe
        ."</p><br>Créé le <p>". IntlDateFormatter::formatObject($this->date_de_creation, 'dd MMMM yyyy', 'fr_FR') .
        "</p><br><h3>Liste de joueurs :</h3><br>
        <ul>";
        //Add condition: if annee_debut is longer than 4 characters, use date_formatter
        foreach($this->liste_joueurs as $joueur){
            echo "<li><p>". $joueur->getJoueur();
            if  (strlen(($joueur->getDateDebutJoueur())->format('Y-m-d H:i:s')) > 4) {
                echo "<br>(". IntlDateFormatter::formatObject($joueur->getDateDebutJoueur(), 'dd MMMM yyyy','fr_FR') .")</p></li>"; 
            } else {
                echo " (". $joueur->getDateDebutJoueur() .")</p></li>";
            }
        }
        echo "</div>";
    }

    /*__toString*/
    
    public function __toString(){
         return $this->nom_equipe;
    }


}

?>