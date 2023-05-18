<?php

/*Is the parent class to Realisateur et Personne*/
class Personne {
    /*Attributes
    I declare the variables of a person, those variables are then also going to be used in the class Acteur and Realisateur, which is why they are set to protected, as this will be the parent of those classes*/
    protected string $prenom;
    protected string $nom;
    protected string $genre;
    protected DateTime $datedenaissance;


    /*Constructor
    I then initialize those variables, this construct will be used as a parent in the class Acteur and Realisateur*/

    public function __construct($prenom, $nom, $genre, $datedenaissance) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->genre = $genre;
        $this->datedenaissance = new DateTime($datedenaissance);


    }

    /*Getters/Setters
    I set the getters and setters to take input from the user, they will be used for everything besides age, which will be calculated automatically from $datedenaissance*/

    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getGenre() {
        return $this->genre;
    }
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getDatedenaissance() {
        return $this->datedenaissance;
    }
    public function setDatedenaissance($datedenaissance) {
        $this->datedenaissance = new DateTime($datedenaissance);
    }


    /*Methods
    There are no methods for this class, as it is just a template for Realisateur and Acteur*/
    public function calcAge(){
        $age = $this->datedenaissance->diff(new DateTime())->format("%Y ans");
        return $age;
    }
    

    /*__toString
    There is no toString function in this class for the same reason*/

}

?>