<?
$array = callList($token);

?>





<table cellpadding="0" cellspacing="0" style="width: 100%; height: 100%; font-size: 11px;">
<tr>
<td id="elencoliste" style="background-color: #f4f4f4; vertical-align: top; width: auto; border-right: 1px solid #e3e3e3;">
<div id="overf" style="overflow-y:auto; overflow-x:hidden;">
<table cellpadding="0" cellspacing="0" style="font-weight: bold; font-size: 12px; width: 250px; height: auto;">
<?
for ($i=0;$i<count($array);$i++) {
$title = $array[$i]->title;
if ($title == "") $title = "No Title";
if ($i == 0) {$color = "style='color: #5F8BA1;'";}
$date_a = $array[$i]->updated;
$date_a = explode("T", $date_a);
$dataanno = explode("-", $date_a[0]);
$dataora1 = explode(".", $date_a[1]);
$dataora = explode(":", $dataora1[0]);
echo "<tr><td class='title' $color id='".$array[$i]->id."'>$title<br><font style='font-weight: normal; color: #ccc; font-size: 9px;'>$dataora[0]:$dataora[1]:$dataora[2] $dataanno[2]/$dataanno[1]/$dataanno[0]</font></td></tr>";
$color = "";
}

?>

<tr><td >
<table id="add_list" cellpadding="0" cellspacing="0" style="width: 100%; height: 20px; display: none; padding: 0px;">
<tr><td style="border-bottom: 1px solid #e4e4e4; padding: 20px 15px; font-size: 12px; cursor: pointer;">
<form id="addlista" style="margin: 0px; padding: 0px; border: 0px;">
<input class="input_t" type="text" checked="checked" name="iadd">
</form>
</td><td style="border-bottom: 1px solid #e4e4e4; padding: 20px 15px; font-size: 12px; cursor: pointer; width: 20px;"><img src="images/x.png" id="list_close" width="15px" height="15px"></td></tr></table>
</td></tr>

</table>
</div>
</td>
<td class="main3" style="width: 100%; vertical-align: top;">
</td>
</tr>
</table>