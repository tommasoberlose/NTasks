<?

$codice = explode(" ", $_GET["codice"]);
function getTask($token,$lista,$task) {
     
    $oauth2token_url = "https://www.googleapis.com/tasks/v1/lists/$lista/tasks/$task?access_token=".$token;
     
    $curl = curl_init($oauth2token_url);
 
    curl_setopt($curl, CURLOPT_HTTPGET, true);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $json_response = curl_exec($curl);
    curl_close($curl);
 
    $authObj = json_decode($json_response);
    return $authObj;
}

$task = getTask($codice[0],$codice[1],$codice[2]);
?>
<table width="100%" height="100%" style="font-size: 12px; font-weight: bold;"><tr><td style="text-align:center; width: 100%; padding: 5px;">
Titolo:<br>
<input value="<? echo $task->title; ?>" name="title" class="button" style="font-family: Arial; margin: 3px; width: 300px; text-align: left; font-weight: normal;">
<br>
Note:<br>
<input value="<? echo $task->notes; ?>" name="notes" class="button" style="font-family: Arial; padding: 3px; margin: 3px; width: 300px; text-align: left; font-weight: normal;">
</td></tr>
<tr><td style="padding: 5px; font-size: 11px; font-weight: normal;">
<center>Questa parte di Modifica degli Elementi deve essere ancora implementata.</center>
</td></tr></table>