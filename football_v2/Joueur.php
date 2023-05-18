<?php
class Joueur {
    /*Attributes*/
    private string $prenom_joueur;
    private string $nom_joueur;
    private array $nationalites;
    private DateTime $date_de_naissance;
    private array $liste_equipes;

    /*Constructor
    Access nationalité via Pays pays->getNationalite*/

    public function __construct($prenom_joueur, $nom_joueur, $date_de_naissance){
        $this->prenom_joueur = $prenom_joueur;
        $this->nom_joueur = $nom_joueur;
        $this->date_de_naissance = new DateTime($date_de_naissance);
        $this->liste_equipes = [];
        $this->nationalites = [];
    

        
        // if ((Equijoueur::AddJoueur($this, $equipe)) == true){
        //     $this->liste_equipes[] = $equipe;
        // } else {
        //     $this->liste_equipes = [];
        //     echo "<br>$equipe n'as pas été ajouté à la liste d'équipes de ce joueur.";
        // }
        
    }

    /*Getters/Setters*/

    public function getPrenomJoueur(){
        return $this->prenom_joueur;
    }
    public function setPrenomJoueur($prenom_joueur){
        $this->prenom_joueur = $prenom_joueur;
    }

    public function getNomJoueur(){
        return $this->nom_joueur;
    }
    public function setNomJoueur($nom_joueur){
        $this->nom_joueur = $nom_joueur;
    }

    public function getDateDeNaissance(){
        return $this->date_de_naissance;
    }
    public function setDateDeNaissance($date_de_naissance){
        $this->date_de_naissance = new DateTime($date_de_naissance);
    }


    /*Methods*/

    public function addNationalite($nationalite){
        if(!in_array($nationalite->getNationalite(),$this->nationalites)) {
            $this->nationalites[] = $nationalite;
        } else {
            echo "<br>Cette nationalité a déjà été ajouté à ". $this->prenom_joueur ." ". $this->nom_joueur ."<br>";
        }
    }



    public function addEquipe(EquiJoueur $equipe){
        if (!in_array($equipe, $this->liste_equipes)) {
            $this->liste_equipes[] = $equipe;
        } else {
            echo "<br>L'équipe $equipe a déjà été ajouté à $this->prenom_joueur $this->nom_joueur.";
        }
    }



    public function infosJoueur(){
        echo '<div id="'. str_replace(" ","",$this->prenom_joueur ."". $this->nom_joueur) .'">';
        echo "<h3>".  $this->prenom_joueur ." ". $this->nom_joueur ." :</h3>
        <br><p>Né le : ". IntlDateFormatter::formatObject($this->date_de_naissance, 'dd MMMM yyyy','fr_FR') 
        ."</p>
        <br><p>Age : ".  $this->date_de_naissance->diff(new DateTime())->format("%Y") ." ans</p>";
        echo "<br><p>Nationalité(s) :</p>";
            if (!empty($this->nationalites)) {
                foreach($this->nationalites as $nationalite){
                    echo "<p> - ". $nationalite->getNationalite() ."</p>";
                }
            } else {
                echo "<br><p>Aucune nationalité n'as été ajouté pour le moment</p>";
            }
        echo "<br><h3> Équipes :</h3>";
            if(!empty($this->liste_equipes)) {
                echo "<ul>";
                foreach($this->liste_equipes as $equipe){
                    echo "<li><p>". $equipe->getEquipe();
                    if (strlen(($equipe->getDateDebutJoueur())->format("Y-m-d H:i:s")) > 4) {
                        echo "<br>(". IntlDateFormatter::formatObject($equipe->getDateDebutJoueur(), 'dd MMMM yyyy','fr_FR').")</p></li>";
                    } else {
                        echo " (". $equipe->getDateDebutJoueur() .")</p></li>";
                    }
                }
                echo "</ul>";
            } else {
                echo "<br><p>Aucune équipe n'as été ajouté au joueur ".  $this->prenom_joueur ." ". $this->nom_joueur  ."pour le moment.</p>";
            }
        echo "</div>";
    }


    /*__toString*/
    public function __toString(){
        return $this->prenom_joueur ." ". $this->nom_joueur;
    }
}


?>