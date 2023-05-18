<?php

class Equijoueur {
    /*Attributes*/
    private Joueur $joueur;
    private DateTime $date_debut_joueur;
    private Equipe $equipe;
    
    /*Constructor*/
    public function __construct(Joueur $joueur,  $date_debut_joueur, Equipe $equipe){
        $this->joueur = $joueur;
        $this->date_debut_joueur = new DateTime($date_debut_joueur);
        $this->equipe = $equipe;
        

        $equipe->addJoueur($this);
        $joueur->addEquipe($this);
    }
    /*Methods*/



    // public static function ListeEquijoueur(){
    //     echo "<h2>Liste complète des équipes et leurs joueurs :</h2>";
    //     foreach($this->$equijoueur as $equipe => $joueurs_et_debut){
    //         echo "<h3>Liste des joueurs de l'équipe $equipe :</h3>";
    //         foreach ($joueurs_et_debut as $joueur => $debut) {
    //             echo "-<p>$joueur (";
    //                 if (strlen($debut)> 4) {
    //                     echo IntlDateFormatter::formatObject(new DateTime($debut), 'dd MMMM yyyy','fr_FR') .")</p><br>";
    //                 } else {
    //                     echo $debut .")</p><br>";
    //                 }
    //         }
    //     }
    //     echo "<br>";
    // }

    /*Getters/Setters*/
    public function getJoueur(){
        return $this->joueur;
    } public function setJoueur(){
        $this->joueur = $joueur;
    }

    public function getEquipe(){
        return $this->equipe;
    } public function setEquipe(){
        $this->equipe = $equipe;
    }

    public function getDateDebutJoueur(){
        return $this->date_debut_joueur;
    } public function setDateDebutJoueur(){
        $this->date_debut_joueur = new DateTime($date_debut_joueur);
    }

    /*__toString*/
    public function __toString(){
        return $this->joueur ." débutant dans cette équipe le ". IntlDateFormatter::formatObject ($this->date_debut_joueur, "dd MMMM yyyy",'fr_FR');
    }
}


?>