<?php
  namespace Dz\Etm\Formation\Models;

class Point3D extends Point {
    private $z;

}
define("EPAISSEUR", 0);
EPAISSEUR + FormeGeometrique::EPAISSEUR + FormeGeometrique::$COULEUR;
abstract class FormeGeometrique {
    public static int $COULEUR = 0;
    public const EPAISSEUR = 0;

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
class Cube extends Carre implements IForme3D {
    function superficie(): float{         
        return parent::superficie() * 6; //return $this->longueur*$this->longueur*6;   
    }
    function volume():float{ return pow($this->longueur, 3);}
}

class Cercle extends FormeGeometrique {
    private int $rayon;
    function get_rayon(){ return $this->rayon; }
    function set_rayon($rayon){ $this->rayon = $rayon;}
                                    
    function superficie():float { return M_PI*$this->rayon*$this->rayon;}

}
class Sphere extends Cercle implements IForme3D {
    function superficie():float { return 4*parent::superficie();}
    function volume():float { return 4/3*M_PI*pow($this->get_rayon(), 3);}
}
interface IForme3D {
    function superficie():float;
    function volume():float;
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