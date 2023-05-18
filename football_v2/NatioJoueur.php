<?php

class Natiojoueur {
    /*Attributes*/
    private Joueur $joueur;
    private Pays $nationalite;

    /*Constructor*/
    public function __construct(Joueur $joueur, Pays $nationalite){
        $this->joueur = $joueur;
        $this->nationalite = $nationalite;

        $joueur->addNationalite($nationalite);
        $nationalite->addJoueur($joueur);
    }

    /*Getters/Setters*/
    public function getJoueur(){
        return $this->joueur;
    } public function setJoueur(){
        $this->joueur = $joueur;
    }

    public function getNationalite(){
        return $this->nationalite;
    } public function setNationalite(){
        $this->nationalite = $nationalite;
    }


    /*Methods*/


    // public static function ListeNatioJoueur(){
    //     echo "<h2>Liste complète  des joueurs et de leurs nationalités :</h2>";
    //     foreach ($this->$natiojoueur as $joueur){
    //         echo "<h3>Nationalité(s) de $joueur :</h3>";
    //         foreach ($nationalites as $nationalite){
    //             echo "-$nationalite<br>";
    //         }
    //     }
    // }

    /*__toString*/

}

?>