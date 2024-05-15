<?php

// Calcola la velocità in mph data la distanza in km o metri e il tempo in minuti o secondi
function calculate_speed($distance, $time)
{
    // Controlla se la distanza è espressa in km e converte in metri
    if (str_contains($distance, 'km')) {
        $distance = (int)$distance;
        $distance *= 1000; // Converti km in metri
    }

    // Controlla se il tempo è espresso in minuti e converte in secondi
    if (str_contains($time, 'min')) {
        $time = (int)$time;
        $time *= 60; // Converti minuti in secondi
    }

    $distance = (int)$distance;
    $time = (int)$time;

    // Calcola la velocità in mph
    $speed = round(($distance / $time) * 2.23694); // 1 metro al secondo equivale a 2.23694 mph

    echo $speed . 'mph'; // Stampa la velocità calcolata in mph
}

// Esegue la funzione con esempi di input
calculate_speed('573km', '39min');

// Calcola il numero di passi che un gatto farebbe tra due punti dati
function cats(int $start, int $finish): int
{
    // Calcola i passi basati su una divisione arbitraria
    return (int)(($finish - $start) / 3 + ($finish - $start) % 3);
}

// Mostra il risultato della funzione cats
var_dump(cats(2, 2));

// Converte una stringa in un punteggio basato sulla posizione delle lettere nell'alfabeto
function wordsToMarks(string $str): int
{
    // Array per associare ogni lettera al suo valore numerico in ordine alfabetico
    $letters = ['.', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $sum = 0;

    // Calcola la somma dei valori delle lettere nella stringa
    foreach ($letters as $key => $element) {
        $sum += substr_count($str, $element) * $key;
    }

    return $sum; // Restituisce il punteggio totale
}

// Mostra il risultato della funzione wordsToMarks
var_dump(wordsToMarks('attitude'));

// Converte una stringa in formato snake_case o kebab-case in camelCase
function toCamelCase($str)
{
    // Definisce il pattern per dividere la stringa sugli underscore o i trattini
    $pattern = "/[-_]/";
    $words = preg_split($pattern, $str);

    // Converte la prima lettera di ogni parola in maiuscolo tranne la prima parola
    foreach ($words as $key => $element) {
        if ($key != 0) {
            $words[$key] = ucfirst($element);
        }
    }

    // Unisce le parole per formare la stringa in camelCase
    return implode("", $words);
}

// Esegue la funzione e stampa il risultato
echo toCamelCase('The_stealth-warrior');

// Converte una stringa CamelCase in kebab-case
function kebabize($string)
{
    // Rimuove tutti i numeri dalla stringa
    $string = preg_replace('/[0-9]/', '', $string);

    $indexes = [0]; // Array per tenere traccia degli indici dove inserire il trattino
    $string_array = str_split($string); // Divide la stringa in un array di caratteri

    // Identifica gli indici dove i caratteri maiuscoli indicano una nuova parola
    foreach ($string_array as $key => $char) {
        if ($key != 0 && ctype_upper($char)) {
            $indexes[] = $key;
        }
    }

    $indexes[] = strlen($string); // Aggiunge la lunghezza della stringa all'array degli indici

    $new_string = []; // Array per costruire la nuova stringa in kebab-case

    // Costruisce le nuove parole e le unisce con il trattino
    foreach ($indexes as $key => $index) {
        if ($key != 0) {
            $new_string[] = lcfirst(substr($string, $indexes[$key - 1], $index - $indexes[$key - 1]));
        }
    }

    return implode("-", $new_string); // Restituisce la stringa in kebab-case
}

// Mostra il risultato della funzione kebabize
var_dump(kebabize('Camel'));
