<?php

class GenreFilm {
    /*Attributes
    I create two arrays, one that contains every genre, and one that will collect and sort films by genre*/
    /*Liste genres :
    "Comédie","Drame","Comédie Dramatique","Thriller","Action/Aventure","Horreur","Science-fiction","Fantastique","Animation","Musical","Documentaire","Guerre","Western","Biopic","Comédie Romantique","Historique","Retransmission","Court métrage"*/

    private string $nom_genre_film;
    private array $film_par_genre;

    /*Constructor*/

    public function __construct($nom_genre){
        $this->nom_genre_film = $nom_genre;
        $this->film_par_genre = [];
    }
    

    /*Getters/Setters*/

    /*Methods*/ 

    /*When a film defines their genre, I check if the genre exists. If it does, I take this film's information, if it is already present in the array, I do nothing, if it isn't, I insert it. I then return the genre and end this function.
    If the genre does not check out, I return a message to indicate that*/
    public function addFilm(Film $film) {
        $this->film_par_genre[] = $film;
        return $this;
    }

    /*A function to display every information present with the films collected in this object so far*/
    public function listeFilms(){
        echo "Films pour le genre : ". $this->nom_genre_film ."<br>";
        foreach ($this->film_par_genre as $film) {
            echo "<br> $film";
        }
        echo "<br><br><br>";
    }


    /*__toString
    No toStrings for this function*/
    public function __toString(){
        return $this->nom_genre_film;
    }


}
?>