<?php
class Titu{
    private string $_nom;
    private string $_prenom;
    private string $_date;
    private string $_ville;
    private array $_compte;

    function __construct (string $nom, string $prenom, string $date, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_date = $date;
        $this->_ville = $ville;
        $this->_compte = [];
    
    } 
    public function AddCompte($compte) {
        $this->_compte[] = $compte;
    }

    public function getNom():string {
        return $this->_nom;
    }
    public function setNom(string $nom){
        return $this->_nom = $nom;
    }
    public function getPrenom():string {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom) {
        return $this->_prenom = $prenom;
    }
    public function getDate():string { 
        return $this->_date;
    }
    public function setDate(string $date) {
        return $this->_date = $date;
    }
    public function getVille():string { 
        return $this->_ville;
    }
    public function setVille(String $ville) {
        return $this->_ville = $ville;
    }
   
    public function __toString(){
        return $this->getNom()."<br>".$this->getPrenom()."<br>". $this->DispInfo()."<br>". $this->getVille();
        foreach ($this->_compte as $compte){
            echo $compte."<br>";
        }
    }



    public function DispInfo(){
        $dateNaissance = date_create($this->_date);
        $aujourdhui = date("Y-m-d");
        $age = date_diff($dateNaissance, date_create($aujourdhui));
        echo $this->_nom."<br>";
        echo $this->_prenom."<br>";
        echo $age->format('%y')."<br>";
        echo $this->_ville."<br>";
    

            foreach($this->_compte as $compte){
                $compte->BanqueInfo();
            }
    }

    // public function Age()   { 
    //     $dateNaissance = "27-01-2004";
    //     $aujourdhui = date("Y-m-d");
    //     $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
    //     echo 'Votre age est '.$diff->format('%y');
    // }
    // public function DispInfo() {
    //     echo "Compte de ".$this. "<br>";
    //     foreach ($this->_compte as $compte) {
    //         echo $compte."<br>";
    // //     }
    // }







    






}

?>