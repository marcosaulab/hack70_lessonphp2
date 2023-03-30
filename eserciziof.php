<?php

// * Controllare che una password rispetti dei criteri che impostiamo noi

// * 1. deve avere almeno 8 caratteri
// * 2. deve contenere almeno un numero
// * 3. deve contenere almeno una lettera UPPERCASE
// * 4. deve contenere almeno un carattere speciale


$password = readline("Inserisci la password: ");

$regola1 = false;
$regola2 = false;
$regola3 = false;
$regola4 = false;

// funzione che controlla la prima regola: deve avere almeno 8 caratteri
function firstCheck($password) {
    if (strlen($password) >= 8) {
        return true;
    } else {
        return false;
    }
}


// codice che controlla la seconda regola: deve contenere almeno un numero
function secondCheck($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    return false;
}


// codice che controlla la terza regola: deve contenere almeno una lettera UPPERCASE
function thirdCheck($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            return true;
        }
    }
    return false;
}

// codice che controlla la quarta regola: deve contenere almeno un carattere speciale
function fourthCheck($password){
    $caratteri_speciali = ['!', '+', '/', '%', '@'];
    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], $caratteri_speciali)) {
            return true;
        }
    }
    return false;
}


$regola1 = firstCheck($password);
$regola2 = secondCheck($password);
$regola3 = thirdCheck($password);
$regola4 = fourthCheck($password);


if ($regola1 && $regola2 && $regola3 && $regola4) {
    echo "La password rispetta tutti i criteri";
} else {
    echo "La password NON rispetta tutti i criteri";
}
