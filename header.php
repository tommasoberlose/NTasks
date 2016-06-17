<?

include_once("var.inc");
include_once("function.php");
include("func_log.php");

?>
<html>
<head>
<META NAME=author CONTENT=%u201DTommaso Berlose%u201D>
<META NAME =description CONTENT=%u201DNTasks è un'applicazione online che si collega a Google Tasks per sfruttarne a pieno l potenzialità e dare all'utente un'interfaccia semplice e gradevole da gestire.%u201C>
<META NAME =DC language CONTENT=%u201Dita%u201D SCHEME=%u201DRFC1766&#8243;>
<link rel="stylesheet" href="generale.css">
<link rel="shortcut icon" href="favicon.ico" >
<title>NTasks <? if ($path != "") { echo " - ".$path; }?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="http://www.ntasks.altervista.org/custom.js" ></script>

<script>
  (function() {
    var cx = '013284879015067392609:86vbmeb_opw';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.it/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();

</script>

<script type="text/javascript">
var token = "<? echo $token; ?>";
var lista = "<? $array = callList($token); echo $array[0]->id; ?>";
</script>

</head>
<body style="background-color: #f4f4f4;"  leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">

<table class="main" cellpadding="0" cellspacing="0" style="font-family: Arial; width: 100%; height:100%; font-size: 11px;"><tr>
<td style="background-color: #f4f4f4; padding: 10px; padding-top: 0px; padding-bottom: 0px; vertical-align: top; height: 60px; width: 100%; border-bottom: 1px solid #e4e4e4;">
<table style="width: 100%; height: 100%;"><tr><td style="width: 300px; padding-left: 10px;">
<a href="http://www.ntasks.altervista.org/"><img src="images/logn_t35.png" width="113px" height="35px" ></a>
</td><td style="width: auto;">
<center><? include("bar.php"); ?></center>
</td>
<?
echo "<td style='width: 300px; padding-left: 10px; text-align: right; padding-top: 0px;'>";
$mail = callAPI($token,"email");
$img_url = callAPI($token,"picture");
$link = callAPI($token,"link");
$name = callAPI($token,"name");
echo "<table style='width: 100%'><tr><td style='text-align: right;'><a href='$link' target='top' style='font-size: 11px; font-weight: bold; color: #7e7e7e;'>$mail</a></td><td rowspan='2' style='text-align: right; padding-left: 10px;'><a href='$link' target='top' style='font-size: 11px; font-weight: bold; color: #7e7e7e;'><img src='$img_url' width='30px' height='30px' style='border: 1px solid #aaa; float: right;'></a></td></tr>
<tr><td style='text-align: right;'>
<a href='logout.php' style='font-size: 11px; font-weight: bold; color: #7e7e7e;'>Esci</a>
</td></tr></table></td>";
?>
</tr></table>
</td></tr>
<tr><td class="main" style="vertical-align: top; height: 100%; background-color: #FFF; padding: 0px;">