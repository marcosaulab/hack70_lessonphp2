<?php

// FUNZIONI si dividono in 2 categorie: built in e funzioni definite dall'utente

$a = "ciao a tutti";

$b = strtoupper($a);

// var_dump($b); // le built in sono funzioni già messe a disposizione dal linguaggio

// * funzioni definite dall'utente, ovvero le scrive il programmatore

function saluta(){ // DICHIARAZIONE DI FUNZIONE
    echo "ciao";
}

// saluta(); // INVOCAZIONE: chiamo la funzione: viene letta la memoria


// function somma() {
//     echo 3 + 2;
// }



// PARAMETRI

function somma($a, $b){ // parametri formali
    echo $a + $b;
}

// somma(4, 2); // in fase di invocazione i parametri che passo sono detti reali (o attuali)


// SCOPE: la porzione di codice all'interno della quale una variabile è visibile

// scope GLOBALE e scope LOCALE

// PHP: variabili => scope locale
$x_scope = 12;

function stampa() {
    $a = 4;
    echo $a;
}

// stampa();

// PHP costanti => scope globale

const ALTEZZA = 12;

function stampaAltezza(){
    echo ALTEZZA;
}

// stampaAltezza();

// IN CHE MODO PASSIAMO PARAMETRI AD UNA FUNZIONE?

// passaggio per valore: sto passando una copia del contenuto della variabile alla funzione
$val = 4;
function incrementa($num){
    $num++;
}
incrementa($val);
// echo $val; // dopo la funzione il valore di val non cambia


// passaggio per riferimento
function incrementaRiferimento(&$num) {
    $num++;
}
incrementaRiferimento($val);
// echo $val; // dopo la funzione il valore di val CAMBIA


// PARAMETRI DI DEFAULT

function sum($num1, $num2=3){
    echo $num1 + $num2;
}

// sum(4, 2);


// PARAMETRI VARIABILI


function media($num1, $num2, $num3){
    echo "La media è: ". ($num1 + $num2 + $num3) / 3;
}

// media(3,2,1);


// spread operator

function mediaN(...$numbers){
    $sum = 0;
    foreach($numbers as $number){ 
        $sum += $number;
    }
    echo $sum / count($numbers);
}

// mediaN(3,4,5,6,7,8,9,10,11);

function mediaNReduce(...$numbers){

    $sum = array_reduce($numbers, function($acc, $number){
        return $acc + $number;
    });

    echo $sum / count($numbers);

}

// mediaNReduce(1,2,3,4,5,6,7,8,9,10,11);

// RETURN: VALORE DI RITORNO

function sommaReturn($a, $b){ 
    return $a + $b;
}

// $risultato = sommaReturn(4,2);

// echo $risultato;

function sommaReturnN($a, $b) {
    echo $a + $b." ";
}

// $risultato = sommaReturnN(4, 2);

// var_dump($risultato);


// ho un array: restituisci il primo numero pari


$numeri = [1,2,3,4,5];

function numPari($arrayNum){

    foreach ($arrayNum as $numero) {
        if ($numero % 2 == 0) {
            return $numero;
        }
    }

}

$numeroPari = numPari($numeri);

echo $numeroPari;

?>