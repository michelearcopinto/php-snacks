<?php

/**
 * Calcola la velocità in mph data la distanza in km o metri e il tempo in minuti o secondi.
 */
function calculate_speed($distance, $time)
{
    if (str_contains($distance, 'km')) {
        $distance = (int)$distance * 1000; // Converti km in metri
    }

    if (str_contains($time, 'min')) {
        $time = (int)$time * 60; // Converti minuti in secondi
    }

    $speed = round(($distance / $time) * 2.23694); // Calcola la velocità in mph
    echo $speed . 'mph';
}

// Esegue la funzione con esempi di input
calculate_speed('573km', '39min');

/**
 * Calcola il numero di passi che un gatto farebbe tra due punti dati.
 */
function cats(int $start, int $finish): int
{
    return (int)(($finish - $start) / 3 + ($finish - $start) % 3);
}

// Mostra il risultato della funzione cats
var_dump(cats(2, 2));

/**
 * Converte una stringa in un punteggio basato sulla posizione delle lettere nell'alfabeto.
 */
function wordsToMarks(string $str): int
{
    $letters = ['.', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $sum = 0;

    foreach ($letters as $key => $element) {
        $sum += substr_count($str, $element) * $key;
    }

    return $sum;
}

// Mostra il risultato della funzione wordsToMarks
var_dump(wordsToMarks('attitude'));

/**
 * Converte una stringa in formato snake_case o kebab-case in camelCase.
 */
function toCamelCase($str)
{
    $pattern = "/[-_]/";
    $words = preg_split($pattern, $str);

    foreach ($words as $key => $element) {
        if ($key != 0) {
            $words[$key] = ucfirst($element);
        }
    }

    return implode("", $words);
}

// Esegue la funzione e stampa il risultato
echo toCamelCase('The_stealth-warrior');

/**
 * Converte una stringa CamelCase in kebab-case.
 */
function kebabize($string)
{
    $string = preg_replace('/[0-9]/', '', $string);
    $indexes = [0];
    $string_array = str_split($string);

    foreach ($string_array as $key => $char) {
        if ($key != 0 && ctype_upper($char)) {
            $indexes[] = $key;
        }
    }

    $indexes[] = strlen($string);
    $new_string = [];

    foreach ($indexes as $key => $index) {
        if ($key != 0) {
            $new_string[] = lcfirst(substr($string, $indexes[$key - 1], $index - $indexes[$key - 1]));
        }
    }

    return implode("-", $new_string);
}

// Mostra il risultato della funzione kebabize
var_dump(kebabize('Camel'));

/**
 * Trova il massimo valore ottenuto dalle rotazioni cicliche del numero dato.
 */
function maxRot($n)
{
    $arr = str_split($n); // Divide il numero in cifre
    $resultArr = [$n]; // Inizializza l'array dei risultati con il numero originale

    for ($i = 0; $i < count($arr) - 1; $i++) {
        array_splice($arr, count($arr), 0, $arr[$i]); // Sposta la cifra corrente alla fine
        array_splice($arr, $i, 1); // Rimuove la cifra dalla posizione originale
        $resultArr[] = (int) implode('', $arr); // Aggiunge il nuovo numero all'array dei risultati
    }

    return max($resultArr); // Ritorna il massimo valore trovato
}

// Test della funzione maxRot
var_dump(maxRot(38458215));
