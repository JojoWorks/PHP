<?php

/*Goes to class casting*/

class Role {
    /*Attributes
    I create 2 variables, one that just collects roles for a film, another that collects all actors that played one specific role, regardless of film*/
    private string $nom_role;
    private array $castings;

    /*Constructor
    I then initialize those arrays*/

    public function __construct($nomrole){
        $this->nom_role = $nomrole;
        $this->castings  = [];
    }

    /*Getters/Setters*/
    public function getNomRole(){
        return $this->nom_role;
    }
    public function setNomRole(){
        $this->nom_role = $nom_role;
    }

    /*Methods
    I create 4 functions, one to add a role to both arrays, one */

    /*This one is to add a role to one arrays*/
    public function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    // public function pointActeur(Acteur $acteur) {
    //     if (in_array($acteur, $this->nom_acteurs)) {
    //         return $acteur;
    //     } else {
    //         echo "$acteur n'as pas jouer ce rôle.<br>";
    //     }
    // }
    
    /*Then this function is used to display all actors that played one role regardless of film*/
    public function listeActeursRole(){
        echo "<br> Acteurs ayant joué le rôle ". $this->nom_role ." :<br>";
        foreach ($this->castings as $casting) {
            echo "<br>". $casting->getActeur();
        }
        echo "<br><br><br>";
    }


    /*__toString*/
    public function __toString(){
        return $this->nom_role;
    }

}

?>