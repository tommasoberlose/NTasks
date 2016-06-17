<?     
$codice = explode(" ", $_POST["codice"]);
$oauth2token_url = "https://www.googleapis.com/tasks/v1/lists/".$codice[1]."/tasks/".$codice[3]."?access_token=".$codice[2]; 
    $post = json_encode(array("title" => $codice[0]));
    $curl = curl_init($oauth2token_url);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_ENCODING, "");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 
    curl_exec($curl);
    curl_close($curl);
?>