<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 3/1/17
 * Time: 17:28
 */

class clClient {

    private $nom;
    private $cognoms;
    private $codi;

    function getNom(){
        return $this->nom;
    }

    function getCognoms(){
        return $this->cognoms;
    }

    function getCodi(){
        return $this->codi;
    }

    function setNom($nom){
        $this->nom = $nom;
    }

    function setCognoms($cognoms){
        $this->cognoms = $cognoms;
    }

    function setCodi($codi){
        $this->codi = $codi;
    }

}

?>