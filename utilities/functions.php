<?php
//funzione che genera lista dei caratteri che voglio//
function generateCharsPool($chars, $uppercase, $numbers, $symbols){
    $charsPool = '';

    if ( $chars ){
        $charsPool .= 'qwertyuiopasdfghjklzxcvbnm';
    }

    if ( $uppercase && $chars ) {
        $charsPool .=  strtoupper($charsPool);
    }

    if ($numbers){
        $charsPool .= '1234567890';
    }

    if ($symbols){
        $charsPool .= '`~!@#$^&*()_-+={[}}|\:;".?,/';
    }

    return $charsPool;
}

//funzione per generare psw e do condizioni quali lunghezza psw , ripetizioni , serie di caratteri dai quali posso attingere per creare psw//
function createPassword($length, $repeteadElements, $charsPool = 'qwertyuiopasdfghjklzxcvbnmWERTYUIOPASDFGHJKLZXCVBNM'){
    if ($repeteadElements == false && strlen($charsPool) < $length){
        return false;
    }

    if ($length > 32 || $length < 4){
        return false;
    }

    $psw = '';

    
    while( strlen($psw) < $length){
        $randomChar = random_int(0, strlen($charsPool) - 1);
        $psw = $psw . $charsPool[$randomChar];

        //condizione per evitare elementi ripetuti//
        if ($repeteadElements == false){
            $charsPool = str_replace($charsPool[$randomChar], '', $charsPool );
        }
    }

    return $psw;
}