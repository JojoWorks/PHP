<?php

/*Goes to Casting*/

/*The structure is almost an identical copy of Realisateur*/
class Acteur extends Personne{

    /*Attributes
    I declare the variables I will use, all of the variables except $filmographie are already present in the class Personne*/
    protected string $prenom;
    protected string $nom;
    protected string $genre;
    protected DateTime $datedenaissance;

    private array $filmographie;


    /*Constructor
    I use the __construct of the parent class Personne, the only thing to construct <ithin this class is filmographie*/

    public function __construct($prenom, $nom, $genre, $datedenaissance) {
        $this->filmographie = array();
        parent::__construct($prenom, $nom, $genre, $datedenaissance);

    }

    /*Getters/Setters
    No need to set them as I use the ones already created in Personne*/

    /*Methods*/

    //Basic display of personnal information
    public function affichageInfo(){
        echo "<br>Acteur :<br>
            $this->prenom $this->nom<br>
            $this->genre <br>
            $this->datedenaissance <br>".
            $this->datedenaissance->diff(new DateTime())->format("%Y ans") ."<br>";
    }

    //I create a function in order to add films to their filmography, with multiple elements
    public function addToFilmo(Film $film) {
        $this->filmographie[] = $film;
    }

    //For each element present within their filmography, I print the title of it and what it contains, then the title of those containers and what they contain and so on 
    public function filmographie(){
        echo "<br><br><br>
        Filmographie de  : ". $this->prenom ." ".  $this->nom ."<br>";
        foreach ($this->filmographie as $film) {
           echo "$film <br>";
        }
        echo "<br>";
    }

    /*__toString
    If the object is called as a string, it returns the last name and the first name of the person*/
    public function __toString() {
        return $this->nom . " " . $this->prenom;
    }
}


?>