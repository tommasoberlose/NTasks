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
<title>Google Sync</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="index.js"></script>
</head>
<body>

<?
$mail = callAPI($token,"email");
$img_url = callAPI($token,"picture");
$link = callAPI($token,"link");
$name = callAPI($token,"name");
echo "<table style='width: 100%'><tr><td style='text-align: right;'><a href='$link' target='top' style='font-size: 11px; font-weight: bold; color: #7e7e7e;'>$mail</a></td><td rowspan='2' style='text-align: right; padding-left: 10px;'><a href='$link' target='top' style='font-size: 11px; font-weight: bold; color: #7e7e7e;'><img src='$img_url' width='30px' height='30px' style='border: 1px solid #aaa; float: right;'></a></td></tr>
<tr><td style='text-align: right;'>
<a href='logout.php' style='font-size: 11px; font-weight: bold; color: #7e7e7e;'>Esci</a>
</td></tr></table>";
?>

</body>
</html>