<?php
/*
On part d'une chaine "Mon texte" et on doit pouvoir la formatter en n'importe quel format XML, CSV, JSON ou HTML

XML
<?xml version="1.0"?>
<text>
    <date>19/07/2017</date>
    <texte>Notre texte</texte>
</text>

CSV
date;texte
19/07/2017;Notre texte

JSON
{
    "date": "19/07/2017",
    "texte": "Notre texte"
}

HTML
<h2>Date : 19/07/2017</h2>
<p>Notre texte</p>
*/

class XMLFormat {
    private $text;
    public function __construct($text) {
        $this->text = $text;
    }
    public function __toString() {
        // header('Content-type: text/xml');
        // Cette méthode est appelé quand on fait un echo de l'objet 
        return '<?xml version="1.0"?>' . "\n" . // \n fais un retour chariot, retour à la ligne
               '<text>' . "\n" .
               // \t fais une tabulation
               "\t" . '<date>' . date('d/m/Y') . '</date>' . "\n" .
               "\t" . '<texte>' . $this->text . '</texte>' . "\n" .
               '</text>' . "\n";
    }
}

interface StringFormatter {
    public function format($text);
}

class CSVFormat implements StringFormatter {
    public function format($text) {
        return 'date;texte' . "\n" . 
               date('d/m/Y') . ';' . $text . "\n";
    }
}

class JSONFormat implements StringFormatter {
    public function format($text) {
        return '{' . "\n" .
               "\t" . '"date": ' . '"' . date('d/m/Y') . '",' . "\n" .
               "\t" . '"texte": ' . '"' . $text . '"' . "\n" .
               '}' . "\n";
    }
}
$jsonFormat = new JSONFormat();
echo $jsonFormat->format('Un texte');

class HTMLFormat implements StringFormatter {
    public function format($text) {
        return '<h2>Date : ' . date('d/m/Y') . '</h2>' . "\n" .
               '<p>' . $text . '</p>' . "\n";
    }
}
$htmlFormat = new HTMLFormat();
echo $htmlFormat->format('Ma chaine');
/*JSON
{
    "date": "19/07/2017",
    "texte": "Notre texte"
}

HTML
<h2>Date : 19/07/2017</h2>
<p>Notre texte</p>*/


$xml = new XMLFormat('Mon texte');
echo $xml; // Affiche <?xml version="1.0"? ><text><date>19/07/2017</date><texte>Notre texte</texte></text>

$csvFormat = new CSVFormat();
echo $csvFormat->format('Mon texte'); // Affiche date;texte 19/07/2017;Mon texte
echo $csvFormat->format('Mon texte 2'); // Affiche date;texte 19/07/2017;Mon texte

// Mix entre nos classes Writer et nos objets StringFormatter
// Le mot clé abstract empêche la classe d'être instanciée directement
abstract class Writer {
    // Une méthode abstraite ne possède pas de contenu et doit obligatoire être créée dans les classes filles
    abstract public function write($text);
}

class FileWriter extends Writer {
    private $file;
    private $formatter;
    public function __construct($file) {
        $this->file = $file;
        $extension = pathinfo($file)['extension']; // Renvoie html, xml, csv ou json
        switch ($extension) {
            case 'html':
                $this->formatter = new HTMLFormat();
            break;
            case 'csv':
                $this->formatter = new CSVFormat();
            break;
            case 'json':
                $this->formatter = new JSONFormat();
            break;
        }
    }
    public function write($text) {
        $file = fopen($this->file, 'w');
        fwrite($file, $this->formatter->format($text));
        fclose($file);
    }
}

$writer = new FileWriter('document.csv');
echo $writer->write('Mon texte');