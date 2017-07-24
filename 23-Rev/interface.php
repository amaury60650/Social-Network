<?php

interface EtreVivant
{
    public function respirer();
    public function deplacer();
}
// L'humain est un être vivant, il implémente l'interface EtreVivant donc il doit respirer et se déplacer pour être un être vivant.
class Humain implements EtreVivant
{
    public function respirer()
    {
        echo 'respire par le nez';
    }
    public function deplacer()
    {
        echo 'avec ses pieds';
    }
}

class Poisson implements EtreVivant
{
    public function respirer()
    {
        echo 'respire par ses branchies';
    }
    public function deplacer()
    {
        echo 'avec ses nageoires';
    }
}

$h1 = new Humain();
$p = new Poisson();


interface RenderTag
{
    public function render($tag, $content);
}

class HTMLTag implements RenderTag
{
    // Constante de classes
    const HTML_TAG_VALID = array('p', 'h1', 'h2', 'h3', 'h4');
    public function render($tag, $content)
    {
        if ( !in_array($tag, HTMLTag::HTML_TAG_VALID) ) {
            throw new Exception('La balise HTML n\'est pas valide');
        }
        
        return '<html><body><'.$tag.'>' . $content . '</'.$tag.'></body></html>';
    }
}

$HTML = new HTMLTag();
echo $HTML->render('p', 'Paragraphe');
echo $HTML->render('toto', 'Paragraphe'); // <toto>Paragraphe</toto> PAS VALIDE

class XMLTag implements RenderTag
{
    public function render($tag, $content)
    {
        return '<?xml version="1.0"?><'.$tag.'>' . $content . '</'.$tag.'>';
    }
}