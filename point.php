<?php
  
  class Point{
    private $x, $y;

    function __construct($a=0, $b=0) {
        $this->deplacer($a, $b);
    }

    #region accesseurs
    function get_x(){ return $this->x; }
    function set_x($a){ if ($a >= 0) $this->x = $a; }
    function get_y(){ return $this->y; }
    function set_y($b){ if ($b >= 0) $this->y = $b; }
    #endregion

    function deplacer($a, $b) { $this->set_x($a); $this->set_y($b); }
    function deplacerVersPoint($other) { 
        //$this->set_x($other->x); $this->set_y($other->y);
        $this->deplacer($other->x, $other->y);
    }
    function afficher() { echo "[" . $this->x . "," . $this->y . "]"; }

  }