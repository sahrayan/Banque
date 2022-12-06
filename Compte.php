<?php
class Compte{
    private string $_livret;
    private int $_solde;
    private string $_devise;
    private string $_titulaire;

    function __construct(string $livret, int $solde, string $devise, string $titulaire) {
        $this->_livret = $livret;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
    }
    public function getLivret():string {
        return $this->_livret;
    }
    public function setLivret(string $livret) {
        $this->_livret = $livret;
    }
    public function getSolde():int {
        
    }    

}

?>