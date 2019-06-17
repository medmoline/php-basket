<?php

player_generate();

//funzione per creare il codice di 3 lettere e 3 numeri
function code_generate(){
  //ciclo che genera 3 lettere casuali
    for ($i=0; $i <3 ; $i++) {
      //applico il metodo chr che mi restituisce un valore tra A e Z maiuscole
      $random_letter = chr(65 + rand(0,25));
      //pusho i risultati nell'array vuoto $array_code
      $array_code[] = $random_letter;
    };
    //stessa cosa per i generare i tre numeri
    for ($i=0; $i <3 ; $i++) {
      $random_number = rand(0,9);
      $array_code[] = $random_number;
    };
    // var_dump($array_code);
    return $array_code;
  }

  //funzione per genrare l'array di giocatori
  function player_generate(){
    //variabile per i punti
    $punti = rand(0,60);
    //percentuali da due (faccio da 0 a 1000 per avere percentuali con la virgola)
    $_perce_2 = rand(0,1000)/10;
    //variabile per la percentuale da 3 che sarà 100 - la percentuale da due
    $_perce_3 = 100 -$_perce_2;
    //ciclo per generare i giocatori
    for ($i=0; $i < 100 ; $i++) {
      //array vuoto che sarà la mia card
      $card_player =[
        'code'=> code_generate(),
        'punti'=> $punti,
        'rimbalzi'=>rand(0,15),
        'falli'=>rand(0,5),
        '% da 2'=>$_perce_2,
        '% da 3'=>$_perce_3
      ];
      //pusho sempre il contenuto nell'array array_players
      $array_players[] = $card_player;
    }
    var_dump($array_players);
    return $array_players;
  }
 ?>
