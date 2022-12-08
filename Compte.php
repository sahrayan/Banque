<?php
class Compte{
    private string $_livret;
    private int $_solde;
    private string $_devise;
    private Titu $_titulaire;

    function __construct(string $livret, int $solde, string $devise, Titu $titulaire) {
        $this->_livret = $livret;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_titulaire->AddCompte($this);
    }

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

    public function __toString(){
        return $this->getSolde() .$this->getDevise() .$this->getTitulaire() ."<br>";
    }
    public function Crediter($ajouter) {
        $this->setSolde($this->getSolde()+$ajouter);
        echo "<br>Vous avez créditer le compte de ".$ajouter. " euro. <br>";
    }
    public function Debit($retrait){
         $this->_solde -= $retrait;
         echo "Vous avez retirer " .$retrait. " euro<br>";
    }











}

?>