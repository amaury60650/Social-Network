<?php
// Une interface permet d'obliger une classe (qui l'implémente) à avoir des méthodes. Exemple, on oblige la classe carré à avoir les méthodes calculAire et calculPerimetre.
interface Forme2D {
    public function calculAire();
    public function calculPerimetre();
}
class Carre implements Forme2D {
    private $longueur;
    private $largeur;
    public function __construct($longueur, $largeur = null) {
        $this->longueur = $longueur;
        $this->largeur = isset($largeur) ? $largeur : $longueur; // Si la largeur est définit dans le constructeur on l'utilise sinon c'est un carré et la largeur est égale à la longueur
    }
    public function calculAire() {
        return $this->longueur * $this->largeur;
    }
    public function calculPerimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }
}

class Cercle implements Forme2D {
    private $rayon;
    public function __construct($rayon) {
        $this->rayon = $rayon;
    }
    public function calculAire() {
        $result = pi() * pow( $this->rayon, 2 ); // aire du cercle = PI * R²
        return round($result, 2); // 6.17456241 devient 6.17
    }
    public function calculPerimetre() {
        return M_PI * $this->rayon * 2;
    }
}

class Triangle implements Forme2D {
    private $cote1;
    private $cote2;
    private $cote3;
    public function __construct($cote1, $cote2 = null, $cote3 = null) {
        $this->cote1 = $cote1;
        $this->cote2 = isset($cote2) ? $cote2 : $cote1;
        $this->cote3 = isset($cote3) ? $cote3 : $cote1;
    }
    public function calculPerimetre() {
        return $this->cote1 + $this->cote2 + $this->cote3;
    }
    public function calculAire() {
        // p = perimetre / 2
        // aire = V p * (p - a) * (p - b) * (p - c)
        $p = $this->calculPerimetre() / 2;
        $heron = $p * ( $p - $this->cote1 ) * ( $p - $this->cote2 ) * ( $p - $this->cote3 );
        if ( $heron <= 0 ) {
            return 'Le triangle est plat donc aire = 0';
        }
        return sqrt( $heron );
    }
}

$carre = new Carre(4); // On peut aussi écrire new Carre(4, 8) pour faire un rectangle
$cercle = new Cercle(4); // Dans le constructeur, on définit la longueur du rayon
$triangle = new Triangle(50, 20, 60); // On peut aussi écrire new Triangle(10, 20) (triangle isocèle)
                                      // On peut aussi écrire new Triangle(10) (triangle equilateral)

echo 'L\'aire du carré est ' . $carre->calculAire() . '<br />';
echo 'Le périmètre du carré est ' . $carre->calculPerimetre() . '<br />';

echo 'L\'aire du cercle est ' . $cercle->calculAire() . '<br />';
echo 'Le périmètre du cercle est ' . $cercle->calculPerimetre() . '<br />';

echo 'L\'aire du triangle est ' . $triangle->calculAire() . '<br />';
echo 'Le périmètre du triangle est ' . $triangle->calculPerimetre() . '<br />';

class Figure {
    private $formes = [];
    public function add(Forme2D $forme) {
        $this->formes[] = $forme;
        return $this;
    }
    public function calculAire() {
        $surface = 0;
        foreach ($this->formes as $forme) {
            $surface += $forme->calculAire();
        }
        return $surface;
    }
}

$figure = new Figure();
$figure->add($carre)
       ->add(new Triangle(10))
       ->add($cercle);
var_dump($figure);
echo $figure->calculAire();