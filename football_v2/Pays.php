<?php

class Pays {
    /*Attributes*/
    private string $nom_pays;
    private string $nationalite;
    private array $equipes;
    private array $joueurs;

    /*Constructor*/
    public function __construct($pays, $nationalite){
        $this->nom_pays = $pays;
        $this->nationalite = $nationalite;

        $this->equipes = [];
        $this->joueurs = [];
    }

    /*Getters/Setters*/
    public function getNomPays(){
        return $this->nom_pays;
    } public function setNomPays($nom_pays){
        $this->nom_pays = $nom_pays;
    }

    public function getNationalite(){
        return $this->nationalite;
    } public function setNationalite($nationalite){
        $this->nationalite = $nationalite;
    }


    /*Methods*/

    public function addEquipe(Equipe $equipe){
        if (!in_array($equipe, $this->equipes)) {
            $this->equipes[] = $equipe;
        } else {
            return "<br>L'équipe $equipe a déjà été enregistré pour ce pays ". $this->pays;
        }
    }

    public function addJoueur(Joueur $joueur){
        if (!in_array($joueur, $this->joueurs)) {
            $this->joueurs[] = $joueur;
        } else {
            return "<br>Le joueur $joueur a déjà été enregistré pour ce pays ". $this->pays;
        }
    }


    public function listeEquipePays(){
        if (!empty($this->equipes)) {
            echo '<div id="'. $this->nom_pays .'">';
            echo "<h3>Équipes répresentant ". $this->nom_pays .":</h3>
            <ul>";
            foreach ($this->equipes as $equipe) {
                        echo "<li><p>$equipe</p></li>";
            }
                echo '</ul></div>';
        } else {
            echo "<br>Aucune équipe a été ajouté à ce pays pour le moment.<br>";
        }
            
    }

    public function listeNatioJoueur(){
        if (!empty($this->joueurs)) {
            echo "<h2>Liste complète  des joueurs pour la nationalité ". $this->nationalite ." :</h2>
            <ul>";
                foreach ($this->joueurs as $joueur){
                    echo "<li><p> $joueur</p></li>";
                }
                
        } else {
            echo "<br>Le pays ". $this->nom_pays ." n'as pas de joueurs ajoutés pour l'instant<br>";
        }
        echo "</ul>";
    } 

    /*__toString*/
    public function __toString(){
        return $this->nom_pays;
    }
    
}







?>