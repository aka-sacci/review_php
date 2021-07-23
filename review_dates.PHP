<?php

//https://www.php.net/manual/pt_BR/function.date.php - usar esse site para saber os dateChar format
//para mexer com calculos de datas em sí, usar Datetime();
//https://www.php.net/manual/pt_BR/class.datetime.php

$data = new DateTime(); //instancia da classe. Você pode passar uma data
//echo $data->format('D, d F Y, H:i:s'); //format retorna o formato especificado da data
$interval = new DateInterval('PT5H'); 
//P -> representação de período - usado antes de dia, mes ano e semana;
//T -> representação de tempo - usado antes de hora, minuto e segundo;
//P sempre é usado para criar um intervalo; T só é usado quando for horas, min ou segundos;
$data->add($interval); //adiciona o intervalo de tempo especificado;

var_dump($data);

?>