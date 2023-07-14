<?php

class Point3D extends Point {
    private $z;

}

abstract class FormeGeometrique {
   private Point $origine;
   private String $nom;

   function get_origine():Point{ return $this->origine;}
   function set_origine(Point $origine):void{$this->origine = $origine;}
   function get_nom():String{ return $this->nom;}
   function set_nom(String $nom){ $this->nom = $nom;}

   abstract function superficie():float;

   static function comparer($fg1, $fg2):int{
        // if ($fg1->superficie() > $fg2->superficie()) return 1;
        // elseif ($fg1->superficie() < $fg2->superficie()) return -1;
        // else return 0;
        return ($fg1->superficie() - $fg2->superficie())*100000;
    }

    function compareTo($fg2):int{
        return ($this->superficie() - $fg2->superficie())*100000;
    }
}

class Carre extends FormeGeometrique {
// TODO
    protected int $longueur;
    function get_longueur():int { return $this->longueur; }
    function set_longueur(int $longueur):void { $this->longueur = abs($longueur);}
    function superficie():float { return $this->longueur * $this->longueur; }
}
class Rectangle extends Carre {
    private int $largeur;

    function get_largeur():int { return $this->largeur; }
    function set_largeur(int $largeur):void {$this->largeur = abs($largeur);}
    function superficie():float { return $this->longueur * $this->largeur; }
}
class Cube extends Carre {
    function superficie(): float{         
        return parent::superficie() * 6; //return $this->longueur*$this->longueur*6;   
    }
}

function comparerFormesGeometriques($fg1, $fg2):int{
    // if ($fg1->superficie() > $fg2->superficie()) return 1;
    // elseif ($fg1->superficie() < $fg2->superficie()) return -1;
    // else return 0;
    return ($fg1->superficie() - $fg2->superficie())*100000;
}



// $fg1 = ...;
// $fg2 = ...;

// // méthode static
// FormeGeometrique::comparer($fg1, $fg2);

// // méthode
// $fg1->compareTo($fg2);

// // fonction
// comparerFormeGeometrique($fg1, $fg2);