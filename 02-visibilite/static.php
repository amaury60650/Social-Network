<?php

class De {
    public static $faces = 6;
    public static function lancer() {
        return rand(1, self::$faces); // self:: permet d'accèder à un attribut statique.
    }
}

echo De::lancer();
