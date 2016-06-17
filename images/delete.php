<?     
    $codice = explode(" ", $_POST["codice"]);
    $oauth2token_url = "https://www.googleapis.com/tasks/v1/users/@me/lists/".$codice[0]."?access_token=".$codice[1];     
    $curl = curl_init($oauth2token_url);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 
    curl_exec($curl);
    curl_close($curl);
?>