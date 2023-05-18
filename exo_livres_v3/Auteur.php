
<?php

class Auteur {
    /*Attributes
    Visibility + type + name
    Je déclare les variables et le type des variables que l'utilisateur va utiliser
    authfname pour le prénom de l'auteur, authlname pour le nom de famille de l'auteur, l'auteur et la bibliographie de l'auteur*/

    private string $authfname;
    private string $authlname;

    
    public array $author_biblio;

    /*Constructor
    J'initialise ensuite ces variables*/
    public function __construct($authfname, $authlname) {
        $this->authfname = $authfname;
        $this->authlname = $authlname;

        $this->author_biblio = array();

    }

   

    /*Methods
    Je crée les fonctions qui vont être utilisé ensuite par l'utilisateur, ici je donne les options d'afficher la bibliographie, d'ajouter un livre et d'enlever un livre à celle-ci*/

    public function afficherBibliographie() {
        if ($this->author_biblio == null) {
            echo "Cet auteur n'as pas encore de livres enregistrés<br><br>";
        } else {
            echo "<h3>Voici la bibliographie de l'auteur ". $this->authfname ." ". $this->authlname ." :</h3><br><br>
            <table>
            <tr>
                <th>Nom de l'oeuvre</th>
                <th>Année de parution</th>
                <th>Nombre de pages</th>
                <th>Prix</th>
            </tr>";
            foreach ($this->author_biblio as $book) {
                echo "<tr>". $book->filmog(); 
            }
            
            echo "</tr>";
        echo "</table>";
        }
        echo "<br><br>";
    }


    public function addToBiblio(Livre $book){
        if (!in_array($livre, $this->author_biblio)){
            $this->author_biblio[] = $book;
        }
    }

    public function remove_book_biblio($book_authorf, $book_titlef) {

        echo $this->author_biblio[array_search($book_titlef, $this->author_biblio)]->displayInfo() ." va être supprimé de la bibliographie de cet auteur.<br><br>";

        unset($this->author_biblio[array_search($book_titlef, $this->author_biblio)]);

        echo "<cite>" . $book_titlef . "</cite> a été supprimé de la bibliographie de $book_authorf.<br><br>";
     }
    /*Getters/Setters
    Je récupère les informations que l'utilisateur fournis et les passe aux variables associées à l'objet*/
    
    public function getAuthfname () {
        return $this->authfname;
    }

    public function setAuthfname () {
        $this->authfname = $authfname;
    }




    public function getAuthlname () {
        return $this->authlname;
    }

    public function setAuthlname () {
        $this->authlname = $authlname;
    }



     /*Je crée une fonction __toString, de cette façon, si echo ou print est utiliser à l'objet de l'instance, dans ce cas là $author1, la réponse sera d'afficher l'auteur*/
     public function __toString() {
        return $this->authfname . " " .$this->authlname;
    }

}


?>