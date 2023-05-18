<?php

/*Takes information from Acteur and Role*/

class Casting {
    /*Attributes
    I create the variables, I will store information in casting, which is gonna be used for the film, listeacteur, which is gonna be used to insert the film in the filmography of every related actor to that film, and also store information in listecastingparfilm to to store the cast of every film*/
    private Role $role;
    
    private Film $film;

    private Acteur $acteur;

    /*Constructor
    I initialize those variables, I create the array for casting and listeacteur, then check if the film already exists, if it does, */

    public function __construct(Film $film, Acteur $acteur, Role $role) {
        $this->film = $film;

        $this->acteur = $acteur;
         
        $this->role = $role;
        
        $acteur->addToFilmo($film);
        $film->addCasting($this);
        $role->addCasting($this);

    }


    /*Getters/Setters
    Here the only information I get from the user outside of a function is a role and a film that is then going to be added to arrays*/

    public function getFilm(){
        return $this->film;
    } public function setFilm($film){
        $this->film = $film;
    }


    public function getActeur(){
        return $this->acteur;
    } public function setActeur($acteur){
        $this->acteur = $acteur;
    }


    public function getRole(){
        return $this->role;
    } public function setRole($role){
        $this->role = $role;
    }


    


  

    /*Methods*/

    // /*Here whenever an actor is added to a cast, it checks if their role exists, if it does, it then adds them to a liste of actors and the complete role list and casting list*/
    // public function addActeur(Acteur $acteur,Role $role){
        
        
    // }

    /*This function is used access then send a copy of the casting list for a film, this function is used during the Film function AddCast  */
    // public function display() {
    //     echo $this->acteur ." pour le rôle ". $this->role ."<br>";
    // }
    /*This function is used to use all of the film' related actors' function to add a film to their filmography*/ 



    /*__toString
    Basic __toString function that confirms the casting is for a certain film*/
    public function __toString(){
        return $this->acteur ." pour le rôle ". $this->role ." ";
    }

}
?>