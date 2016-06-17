<?

include_once("var.inc");

?>

<html>
<head>
<META NAME=author CONTENT=%u201DTommaso Berlose%u201D>
<META NAME =description CONTENT=%u201DNTasks è un'applicazione online che si collega a Google Tasks per sfruttarne a pieno l potenzialità e dare all'utente un'interfaccia semplice e gradevole da gestire.%u201C>
<META NAME =DC language CONTENT=%u201Dita%u201D SCHEME=%u201DRFC1766&#8243;>
<link rel="stylesheet" href="generale.css">
<link rel="shortcut icon" href="favicon.ico" >
<title>NTasks - Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="http://www.ntasks.altervista.org/custom.js" ></script>



</head>
<body style="background-color: #f4f4f4;"  leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<table class="feedback_div" cellpadding="0" cellspacing="0" style="font-family: Arial; display: block; height: 200px; margin-top: -100px; width: 400px; margin-left: -200px; font-size: 11px;"><tr>
<td colspan="3" style="padding: 20px; background-image: url(http://ntasks.altervista.org/images/back_l.png); background-repeat: no-repeat;">
</td>
</tr><tr>
<td style="padding: 10px; height: 80px;"><center>
<a href="<? echo $loginUrl; ?>"><div class="button" style="width: 80px;">Accedi</div></a></center><td>
<td style="width:50%; padding: 10px"><center>
  <a href="https://accounts.google.com/SignUp" target="top"><div class="button" style="width: 80px;">
  Registrati</div>
  </a></center>
</td></tr></table>

</body>
</html>