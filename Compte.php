<?php
// Une classe est un modèle pour les objets 
class Compte{
    private string $_livret;
    private int $_solde;
    private string $_devise;
    private Titu $_titulaire;
// Construct : pour initialiser les proprietés de l'objet
    function __construct(string $livret, int $solde, string $devise, Titu $titulaire) {
        //$this = l'objet 
        $this->_livret = $livret;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        //rajout des titulaires dans compte
        $this->_titulaire->AddCompte($this);
    }
// Methode
    public function getLivret():string {
        return $this->_livret;
    }
    public function setLivret(string $livret) {
        $this->_livret = $livret;
        
    }
    public function getSolde():int {
        return $this->_solde;
    }    
    public  function setSolde (int $solde){
        return $this->_solde = $solde;
        
    }
    public function getDevise():string {
        return $this->_devise;
    }
    public function setDevise (string $devise){
        return $this->_devise = $devise;
        
    }
    public function getTitulaire():Titu{
        return $this->_titulaire;
    }
    public function setTitulaire(Titu $titulaire){
        return $this->_titulaire = $titulaire;
        
    }



//retourne la representationde l'objet 
    public function __toString(){
        return $this->getSolde() .$this->getDevise() .$this->getTitulaire() ."<br>";
    }


//Crediter le compte 
    public function Crediter($argent) {
        $this->_solde += $argent;
        echo "<br>Vous avez créditer le compte de ".$argent. " euro. <br>";
    }


//Debite le cmpte
    public function Debit($argent){
       $this->_solde -= $argent;
         echo "Vous avez retirer " .$argent. " euro<br>";
    }

// envoie de l'argent
    public function Virement($compte2,$argent){
    echo "le nouveau solde et de "." ".$this->setSolde=($this->getSolde()+$argent);
    }
// affiche les données d un compte
    public function BanqueInfo(){
        echo "445463715442****<br>".$this->_livret."<br>".$this->_solde." ".$this->_devise."<br>";
    }
   
   





 



}

?>
