<?

$nomesito = "NTasks"; /* Nome del sito */

$anno_0 = "2012"; /* Anno di inizio del copyright */

$anno_0 = str_replace(" ", "", $anno_0); /* Tolgo gli eventuali spazi nella data */

$anno = date(Y); /* Anno corrente */

echo utf8_encode($nomesito." © ");

if ($anno_0 >= $anno)  {echo utf8_encode($anno);} else {echo utf8_encode($anno_0." - ".$anno);} 


/* Script by Tom */
/* Non togliete questo copyright xD */

?>