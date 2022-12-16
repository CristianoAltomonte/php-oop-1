<?php

class Movie{
    //Scrivo gli attributi della classe
    public $titolo;
    public $year;
    public $genere;
    public $voto;
  
  
    //costruttore
    function __construct( $_x, $_y, $_z, $_w ){

      $this->titolo = $_x;
      $this->year = $_y;
      $this->genere = $_z;
      $this->voto = $_w;
      
    }
  
    //Funzione custom da abbinare a ogni istanza
    public function Vote(){
      if( $this->voto >= 6 ){
        return "Il film $this->titolo con Voto $this->voto lo consigliamo";
      } else {
        return "Il film $this->titolo con Voto $this->voto non lo consigliamo";
      }
    }
  
  }

?>