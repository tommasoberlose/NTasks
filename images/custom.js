$(document).ready(function() {

$("td#refresh").click(function() {
change(lista);
});

$("td#options > img").ajaxStart(function(){
    $(this).attr("src","images/load2.gif");
}).ajaxStop(function(){
    $(this).attr("src","images/chrome.png");
});

$("td#add").click(function() {
$("#add_list").slideToggle(500);
$("input[name=iadd]").focus();
});


$("#bin").click(function() {
   if (confirm("Sicuro di voler Eliminare questa Lista?")) {
   $.post("delete.php", { codice: lista+" "+token },
   function(data) {
   $("#"+lista).parent().remove();
   change("");
   $("td.title:first").css("color","#5F8BA1");
   });
   }
});

$("#rename").click(function() {
   title = prompt("Rinomina Lista","");
   hour = new Date();
   if (title) {
   $.post("rename.php", { codice: title+" "+lista+" "+token },
   function(data) {
   $("#"+lista).empty().prepend(title+"<br><font style='font-weight: normal; color: #ccc; font-size: 9px;'>Aggiornato ora</font>");
   });
   }
});

$("img#feedback_close").click(function() {
$("table#mode").fadeOut(500);
});

$("#clear").click(function() {
   $.post("clear.php", { codice: lista+" "+token },
   function(data) {
   change(lista);
   });
});

$("td.title").click(function() {
change($(this).attr("id"));
$("td.title").css("color","#444");
$(this).css("color","#5F8BA1");
});


function change(codlist) {
lista = codlist;
$("td.main3").empty().load("task.php?token="+token+"&list="+codlist);
}


$("#list_close").click(function() {
$("#add_list").hide();
});

$("form#addlista").submit(function() {
   $.post("create.php", { title: $("input[name=iadd]").attr("value") },
   function(data) {
   window.location.href = "http://www.ntasks.altervista.org/";
   });
   return false;
});


$("td#options").click(function() {
  $(".main").animate({
    marginTop: '-='+$(window).height()
  }, 1000, "swing", function() {
  $("div.options_d").fadeIn(300);
  });
});


$("#options_close").click(function() {
  $("div.options_d").fadeOut(300, function() {
  $(".main").animate({
    marginTop: '0'
  }, 1000, "swing");
  });
});

change(lista);
$("#overf").height((Number($(window).height()) - 60)+"px");

});