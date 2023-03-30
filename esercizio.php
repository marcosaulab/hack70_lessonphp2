<?php

// * Controllare che una password rispetti dei criteri che impostiamo noi

// * 1. deve avere almeno 8 caratteri
// * 2. deve contenere almeno un numero
// * 3. deve contenere almeno una lettera UPPERCASE
// * 4. deve contenere almeno un carattere speciale


/**
 * 
 * 1 -> prendere in ingresso una password -> la mettiamo in una variabile
 * 
 * 1 -> controlliamo la regola 1 (deve essere vera) 
 * 2 -> controlliamo la regola 2 (deve essere vera)  
 * 3 -> controlliamo la regola 3 (deve essere vera)  
 * 4 -> controlliamo la regola 4 (deve essere vera)  
 * 
 * 
 * 5 -> quindi le regole dovranno essere poste in && AND tra loro
 * 
 * 6 -> Password valida / Password non valida
 * 
 */

$password = readline("Inserisci la password: ");

$checkPrimaRegola = false;
$checkSecondaRegola = false;
$checkSecondaRegola = false;
$checkQuartaRegola = false;

// codice che controlla la prima regola: deve avere almeno 8 caratteri
if(strlen($password) >= 8) {
    $checkPrimaRegola = true;
}

// codice che controlla la seconda regola: deve contenere almeno un numero
for($i=0;$i<strlen($password);$i++) {
   if(is_numeric($password[$i])) {
        $checkSecondaRegola = true;
   }     
}

// codice che controlla la terza regola: deve contenere almeno una lettera UPPERCASE
for ($i = 0; $i < strlen($password); $i++) {
    if(ctype_upper($password[$i])){
        $checkTerzaRegola = true;
    }
}


// codice che controlla la quarta regola: deve contenere almeno un carattere speciale
$caratteri_speciali = ['!', '+', '/', '%', '@'];

for ($i = 0; $i < strlen($password); $i++) {
    if(in_array($password[$i], $caratteri_speciali)){
        $checkQuartaRegola = true;
    }
}


if( $checkPrimaRegola && $checkSecondaRegola && $checkSecondaRegola && $checkQuartaRegola ) {
    echo "La password rispetta tutti i criteri";
} else {
    echo "La password NON rispetta tutti i criteri";
}


?>