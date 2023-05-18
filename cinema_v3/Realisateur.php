<?php

include 'Personne.php';

/*The structure is almost an identical copy of Acteur*/
class Realisateur extends Personne {
    /*Attributes
    I declare the variables I will use, all of the variables except $filmographie are already present in the class Personne*/
    protected string $prenom;
    protected string $nom;
    protected string $genre;
    protected DateTime $datedenaissance;

    private array $filmographie;


    /*Constructor
    Once again I use the __construct of the parent class Personne, the only thing to construct within this class is filmographie*/

    public function __construct($prenom, $nom, $genre, $datedenaissance) {
        $this->filmographie = array();
        parent::__construct($prenom, $nom, $genre, $datedenaissance);

    }

    /*Getters/Setters
    Again, no need to set them as I use the ones already created in Personne*/

    /*Methods*/

    //Once again basic display of personnal information
    public function affichageInfo(){
    echo "<br>Réalisateur :<br>" . 
            $this->prenom . " " . $this->nom . "<br>" . 
            $this->genre . "<br>" . 
            $this->datedenaissance->format("d/m/Y") ."<br>".
            $this->datedenaissance->diff(new DateTime())->format("%Y ans") ."<br>"; 
    }

    //As for acteur, I create a function in order to add films to their filmography, with multiple elements

    public function addToFilmo(Film $film) {
        $this->filmographie[] = $film;
        return $this;
    }

    //I then also have a function to display every element in this array, and the elements within those elements and so on
    public function filmographie(){
        echo "<br><br><br>
        Filmographie de  : ". $this->prenom ." ".  $this->nom ."<br>";
        foreach ($this->filmographie as $film) {
            echo "$film <br>";
        }
        
    }

    /*__toString*/

    //If this object is called as a string, it return the last name and first name of the object
    public function __toString() {
        return $this->nom . " " . $this->prenom;
    }
}

?>