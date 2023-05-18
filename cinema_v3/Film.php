<?php

/*Class that collects all information*/

class Film {
    /*Attributes
    I create all the variables I'll use as film information*/
    private string $titre;
    private array $genres;
    private Realisateur $realisateur;
    private array $castings;
    private DateTime $date_de_sortie_fr;
    private int $duree;
    private string $synopsis;

    /*Constructor
    I then construct them, the variable $fmtFR is just used as a formatter to translate the french release date's month in french as it is in english by default when using DateTime*/

    public function __construct($titre, GenreFilm $genre, Realisateur $realisateur, $date_de_sortie_fr, $duree, $synopsis) {
        $this->titre = $titre;
        $this->genres[] = $genre->addFilm($this);

        $this->realisateur = $realisateur->addToFilmo($this);
        /*Genres objects : AddThis function ?*/
        $this->castings = [];
        $this->date_de_sortie_fr = new DateTime($date_de_sortie_fr);
        $this->duree = $duree;
        $this->synopsis = $synopsis;

    }

    /*Getters/Setters
    I write here all the information I'm going to collect from the user*/

    public function getTitre(){
        return $this->titre;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }


    public function getRealisateur(){
        return $this->realisateur;
    }
    public function setRealisateur($realisateur){
        $this->realisateur = $realisateur;
    }


    public function getDateDeSortieFr(){
        return $this->date_de_sortie_fr;
    }
    public function setDateDeSortieFr($date_de_sortie_fr){
        $this->date_de_sortie_fr = new DateTime($date_de_sortie_fr);
    }

    public function getDuree(){
        return $this->duree;
    }
    public function setDuree($duree){
        $this->duree = $duree;
    }

    public function getSynopsis(){
        return $this->synopsis;
    }
    public function setSynopsis($synopsis){
        $this->synopsis = $synopsis;
    }



    /*Methods*/

    //Basic function to display simple information about the film

    //Function to collect and then add the cast of a film to the film information that is going to be sent to the filmography of the related objects realisateur and acteur


    public function addCasting(Casting $cast) {
        if (is_object($cast)) {
            if(!in_array($cast, $this->castings)){
                $this->castings[] = $cast;
                echo "<br>Le casting $cast a bien été ajouté.<br>";
            } else {
                echo "<br>Le casting $cast a déjà été ajouté.<br>";
            }

        } else {
            echo "<br>Ce casting est incorrect";
        }
    }

    public function addGenre(GenreFilm $genre){
        if (is_object($genre)) {
            if(!in_array($genre, $this->genres)){
                $this->genres[] = $genre;
                echo "<br>Le genre $genre a bien été ajouté au film ". $this->titre ."<br>";
            } else {
                echo "<br>Le genre $genre a déjà été ajouté au film ". $this->titre ."<br>";
            }

        } else {
            echo "<br>Ce genre est incorrect";
        }
    }

    public function infoFilm() {
        echo "<br>Informations pour le film : ". $this->titre ."<br>
        Genres : <br>";

        foreach ($this->genres as $genre){
            echo "$genre <br>";
        }
        

        echo "<br>Réalisateur : ". $this->realisateur ."<br>
        Cast : <br>";
        foreach  ($this->castings as $casting){
            echo "$casting <br>";
        }

        echo "Date de sortie en France : ". IntlDateFormatter::formatObject($this->date_de_sortie_fr, 'dd MMMM yyyy','fr_FR') ."<br>
        Durée: ".  $this->duree ." minutes <br>
        Synopsis : ". $this->synopsis ."<br>";
    }

    public function listeCast(){
        echo "Casting pour le film ". $this->titre ." :<br>";
        foreach ($this->castings as $casting) {
            echo "$casting <br>";
        }
    }

    /*__toString
    Basic toString function that just returns the film's title*/
    public function __toString(){
        return $this->titre;
    }

}

?>