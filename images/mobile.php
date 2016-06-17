<?

include_once("var.inc");
include_once("function.php");
include("func_log.php");

?>
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<META NAME=author CONTENT=%u201DTommaso Berlose%u201D>
<META NAME =description CONTENT=%u201DNTasks è un'applicazione online che si collega a Google Tasks per sfruttarne a pieno l potenzialità e dare all'utente un'interfaccia semplice e gradevole da gestire.%u201C>
<META NAME =DC language CONTENT=%u201Dita%u201D SCHEME=%u201DRFC1766&#8243;>
<link rel="stylesheet" href="generale.css">
<link rel="shortcut icon" href="favicon.ico" >
<title>NTasks <? if ($path != "") { echo " - ".$path; }?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="http://www.ntasks.altervista.org/custom.js" ></script>

<script type="text/javascript">
var token = "<? echo $token; ?>";
var lista = "<? $array = callList($token); echo $array[0]->id; ?>";
</script>

</head>
<body style="background-color: #f4f4f4;"  leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">

<table cellpadding="0" cellspacing="0" style="position: fixed; left: 0px; top: 0px; width: 100%; height: 50px; font-size: 11px;">
<tr>
<td class="button" style="min-width: 0px; background-color: #fdfdfd; width: auto; border-left: 0px; border-right: 0px; border-top: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; -webkit-box-shadow: inset 0px 1px 2px #e5e5e5; -moz-box-shadow: inset 0px 1px 2px #e5e5e5; box-shadow: inset 0px 1px 2px #e5e5e5;"><img src="images/fav.png" width="30px" height="30px"></td>
<td class="button" style="min-width: 0px; background-color: #fdfdfd; width: auto; border-right: 0px; border-top: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; -webkit-box-shadow: inset 0px 1px 2px #e5e5e5; -moz-box-shadow: inset 0px 1px 2px #e5e5e5; box-shadow: inset 0px 1px 2px #e5e5e5;" id="add"><img alt="Aggiungi Lista" src="images/plusb15.png" width="15px" height="15px"></td>
<td class="button" style="min-width: 0px; background-color: #fdfdfd; width: auto; border-right: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; border-top: 0px; -webkit-box-shadow: inset 0px 1px 2px #e5e5e5; -moz-box-shadow: inset 0px 1px 2px #e5e5e5; box-shadow: inset 0px 1px 2px #e5e5e5;" id="rename"><img alt="Rinomina Lista" src="images/renb15.png" width="15px" height="15px"></td>
<td class="button" style="min-width: 0px; background-color: #fdfdfd; width: auto; border-right: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; border-top: 0px; -webkit-box-shadow: inset 0px 1px 2px #e5e5e5; -moz-box-shadow: inset 0px 1px 2px #e5e5e5; box-shadow: inset 0px 1px 2px #e5e5e5;" id="bin"><img alt="Cancella Lista Attuale" src="images/x15.png" width="15px" height="15px"></td>
<td class="button" style="min-width: 0px; background-color: #fdfdfd; width: auto; border-right: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; border-top: 0px; -webkit-box-shadow: inset 0px 1px 2px #e5e5e5; -moz-box-shadow: inset 0px 1px 2px #e5e5e5; box-shadow: inset 0px 1px 2px #e5e5e5;" id="clear"><img alt="Elimina Elementi Conclusi" src="images/clear15.png" width="15px" height="15px"></td>
</tr>
</table>
<table class="main" cellpadding="0" cellspacing="0" style="margin-top: 50px; font-family: Arial; width: 100%; height:100%; font-size: 11px;">
<tr><td class="main" style="vertical-align: top; height: 100%; background-color: #FFF; padding: 0px;">
<? include("home.php"); ?>
</td></tr></table>

</body>
</html>