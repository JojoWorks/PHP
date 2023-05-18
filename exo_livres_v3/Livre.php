
<?php

class Livre {
    /*Attributes
    Visibility + type + name
    Je déclare les variables et le type des variables que l'utilisateur va utiliser
    authfname pour le prénom de l'auteur, book_title pour le nom de famille de l'auteur, l'auteur et la bibliographie de l'auteur*/
    private Auteur $book_author;
    private string $book_title;
    private int $book_year;
    private int $book_pages;
    private int $book_price;
    


    /*Constructor
    J'initialise ensuite ces variables*/
    public function __construct($book_author, $book_title, $book_year, $book_pages, $book_price) {
    
    $this->book_author = $book_author;
    $this->book_title = $book_title;
    $this->book_year = $book_year;
    $this->book_pages = $book_pages;
    $this->book_price = $book_price;

    $this->book_author->author_biblio[] = $this;



    echo "<cite>$book_title</cite> écrit en ($book_year), qui contient $book_pages pages, au prix de $book_price € et écrit par  $book_author a été ajouté à la bibliographie de cet auteur.<br><br>";

    }

    /*Je crée une fonction __toString, de cette façon, si echo ou print est utiliser à l'objet de l'instance, dans ce cas là $author1, la réponse sera d'afficher l'auteur*/
    public function __toString() {
        return $this->book_title;
    }


    /*Methods
    Je crée les fonctions qui vont être utilisé ensuite par l'utilisateur, ici, j'affiche les informations du livre*/
    public function displayInfo(){
        echo "<br><h3>Livre : <h3><cite>". $this->book_title
        ."</cite><br>Écrit en (". $this->book_year .") par ". $this->book_author ." contenant ". $this->book_pages ." pages, au prix de ". $this->book_price ." €";
    }

    public function filmog(){
        echo "<td><cite>". $this->book_title ."</cite></td>
        <td>(". $this->book_year .")</td>
        <td>". $this->book_pages ."</td>
        <td>". $this->book_price ." €</td>";
    }
    



    /*Getters/Setters
    Je récupère les informations que l'utilisateur fournis et les passe aux variables associées à l'objet*/
    
    public function getBook_Author () {
        return $this->book_author;
    }
    public function setBook_author () {
        $this->book_author = $book_author;
    }

}

?>
    
</body>
</html>