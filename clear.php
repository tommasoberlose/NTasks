<?     
    $codice = explode(" ", $_POST["codice"]);
$oauth2token_url = "https://www.googleapis.com/tasks/v1/lists/".$codice[0]."/clear?access_token=".$codice[1];
    $curl = curl_init($oauth2token_url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "");
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 
    $json_response = curl_exec($curl);
    curl_close($curl);
 
    header("Location: http://www.ntasks.altervista.org/?res=Elementi Conclusi Cancellati");
?>