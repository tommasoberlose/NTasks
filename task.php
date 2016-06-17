<?

if (isset($_COOKIE['token_log'])) {

function callList($token) {
    $oauth2token_url = "https://www.googleapis.com/tasks/v1/users/@me/lists?access_token=".$token;     
    $curl = curl_init($oauth2token_url);
 
    curl_setopt($curl, CURLOPT_HTTPGET, true);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $json_response = curl_exec($curl);
    curl_close($curl);
 
    $authObj = json_decode($json_response);
    return $authObj->items;
}

function callTask($token,$list) {
    $oauth2token_url = "https://www.googleapis.com/tasks/v1/lists/".$list."/tasks?access_token=".$token;     
    $curl = curl_init($oauth2token_url);
 
    curl_setopt($curl, CURLOPT_HTTPGET, true);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $json_response = curl_exec($curl);
    curl_close($curl);
 
    $authObj = json_decode($json_response);
    return $authObj->items;
}

$array = callList($_GET['token']);
?>


<script type="text/javascript">

function change(codlist) {
lista = codlist;
$("td.main3").empty().load("task.php?token="+token+"&list="+codlist);
}

$("img#feedback_close").click(function() {
$("table#mode").hide();
});

$("tr#task img#done").click(function() {
if ($(this).attr("src") == "images/c15.png") {
$(this).attr("src","images/cs15.png");
$(this).parent().parent().css("color","#ccc");
   $.post("uptask.php", { codice: $(this).attr("class"), status: "needsAction" },
   function(data) {
   });
} else {
$(this).attr("src","images/c15.png");
$(this).parent().parent().css("color","#444");
   $.post("uptask.php", { codice: $(this).attr("class"), status: "completed" },
   function(data) {
   });
}
});

$("form#add_task").submit(function() {
   $.post("createt.php", { title: $("input[name=title]").attr("value"), codice: "<? echo $_GET["list"]; ?>"},
   function(data) {
   $("td.main3").empty().load("task.php?token=<? echo $_GET["token"]; ?>&list=<? echo $_GET["list"]; ?>");
   });
   return false;
});

$("tr#task a").click(function() {
   $(this).parent().parent().remove();
   $.post("deletet.php", { codice: $(this).attr("href") },
   function(data) {
   });
   return false;
});


$("td#task").bind("contextmenu", function() {
$("#main2").animate({scrollTop:0}, 'slow');
var taskid = $(this).parent().attr("class");
$("#mode_main").load("look.php?codice=<? echo $_GET["token"]."%20".$_GET["list"]."%20"; ?>"+taskid, function(data) {
$("table#mode").show();
});
return false;
});

$("td#task").click(function() {
   title = prompt("Modifica Elemento",$(this).text());
   if (title != $(this).text()) {
   if (title) {
   task = $(this).parent().attr("class");
   $.post("renamet.php", { codice: title+" "+lista+" "+token+" "+task },
   function(data) {
   change(lista);
   });
   }}
});

$("#main2").height((Number($(window).height()) - 60)+"px");

$("#main2").scroll(function() {
if ($("#main2").scrollTop() > 0) {
$("#main2").addClass("ombra");
} else {
$("#main2").removeClass("ombra");
}
});
</script>

<div id="main2" style="overflow: auto; height: auto;">
<table id="mode" style="display:none; width: 100%; border-bottom: 1px solid #e3e3e3; height: auto; padding: 5px; padding-top: 0px; font-size: 11px"><tr>
<td style="height: 100%; vertical-align: top; " id="mode_main">
</td><td style="width: 20px; vertical-align: top;"><img src="images/closediv.png" width="20px" height="20px" id="feedback_close" style="cursor: pointer;" alt="Close"></td></tr></table>

<table cellpadding="0" cellspacing="0" style="width: 100%; height: auto; overflow: auto; font-size: 11px; padding: 5px;">
<?

if ($_GET["list"] == "") {$idd = $array[0]->id;} else {$idd = $_GET["list"];}
$tasks = callTask($_GET["token"],$idd);

for ($f=0;$f<count($tasks);$f++) {
if ($tasks[$f]->status == "completed") { $c1 = "s"; $c2 = "style='color: #ccc;'"; }

echo "<tr class='".$tasks[$f]->id."' id='task'><td class='line' style='width: 20px'>
<img src='images/c".$c1."15.png' id='done' class='".$_GET["list"]." ".$tasks[$f]->id." ".$_GET["token"]."' width='15px' height='15px'>
</td><td $c2 class='line' id='task'>".$tasks[$f]->title."</td>
<td class='line' style='width: 20px' ><a class='button' style='border: 0px; padding: 0px; background-color: #FFF;' href='".$_GET["list"]." ".$tasks[$f]->id." ".$_GET["token"]."'><img alt='Cancella' src='images/x.png' width='15px' height='15px'></a></td></tr>";
$c1 = ""; $c2 = "";
}

echo "<tr><td colspan='2' class='line' style='padding: 4px; padding-top: 5px;'><form id='add_task' style='padding: 0px; margin: 0px;'><input alt='Scrivi Nuovo Elemento' type='text' name='title' style='font-size: 11px; color: #444; width: 100%; border: 0px; margin: 0px;'></td><td class='line' style='width: 20px;'><input type='image' src='images/plus.png' width='15px' height='15px' alt='Aggiungi'></form></td></tr>";

?>
</table>
</div>

<? 
} else {
echo "<div class='title' style='font-weight: bold; text-align: center; border: 0px;'>Errore nel Collegamento con Google.<br>Ricarica la Pagina o vai al <a href=\"http://www.ntasks.altervista.org/login.php\" style='color: #5F8BA1;'>Login</a>.</div>";
} ?>