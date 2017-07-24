<?php

namespace Webforce;

class Application
{
    private $html;
    private $css = [];
    private $js = [];
    public $title;

    public function run()
    {
        echo '<!DOCTYPE html>' . "\n";
        echo '<html>' . "\n";
            echo '<head>' . "\n";
                echo '<title>' . $this->title . '</title>' . "\n";
            echo '<head>' . "\n";
            echo '<body>' . "\n";
                echo '<h1>Le contenu de ' . $this->title . '</h1>' . "\n";
            echo '</body>' . "\n";
        echo '</html>' . "\n";
    }
}