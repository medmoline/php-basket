<?php
//creo array vuoto che conterrà i giocatori
$players =[];
//creo i giocatori richiamando la funzione che genera l'array delle statistiche
for ($i=0; $i < 100; $i++) {
  $card_player = player_generate();
  //pusho i risultati nelL'array principale
  array_push($players,$card_player);
}

//funzione per ciclare tutte le stats e stamparle
function stampa_players($array){
  foreach ($array as $key => $value) { ?>
    <div class="card">
      <h2> <?php echo $value['code'] ?> </h2>
      <ul>
        <li>Punti : <?php echo $value['points']; ?> </li>
        <li>Rimbalzi : <?php echo $value['rebounds']; ?></li>
        <li>Falli : <?php echo $value['fouls']; ?></li>
        <li>%_da 2 : <?php echo $value['da_2'] ?></li>
        <li>%_ da 3 : <?php echo $value['da_3']  ?></li>
      </ul>
    </div>


<?php }
}



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
    //applico il metodo implode che mi unisce l'array in un'unica stringa
    $code = implode($array_code);
    // var_dump($code);
    return $code;
  }

  //funzione per genrare l'array di giocatori
  function player_generate(){

    //variabile per i punti
    $punti = rand(0,60);
    //percentuali da due (faccio da 0 a 1000 per avere percentuali con la virgola)
    $_perce_2 = rand(0,1000)/10;
    //variabile per la percentuale da 3 che sarà 100 - la percentuale da due
    $_perce_3 = 100 - $_perce_2;
    //array che conterrà le statistiche
      $card_player = [
        'code' => code_generate(),
        'points' => $punti,
        'rebounds' => rand(0,15),
        'fouls' => rand(0,5),
        'da_2' => $_perce_2,
        'da_3' => $_perce_3
      ];
      // var_dump($card_player);
      return $card_player;
    };
    // var_dump($card_player);
 ?>
