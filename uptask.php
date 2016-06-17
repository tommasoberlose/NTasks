<?     
$codice = explode(" ", $_POST["codice"]);

    if($_POST["status"] == "completed") {

    $oauth2token_url = "https://www.googleapis.com/tasks/v1/lists/".$codice[0]."/tasks/".$codice[1]."?access_token=".$codice[2]; 
  
    $curl = curl_init($oauth2token_url);
 
    curl_setopt($curl, CURLOPT_HTTPGET, true);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $json_response = curl_exec($curl);
    curl_close($curl);
 
    $authObj = json_decode($json_response);
    $authObj->status = "needsAction";
    unset($authObj->completed);
    $post = json_encode($authObj);

    $oauth2token_url = "https://www.googleapis.com/tasks/v1/lists/".$codice[0]."/tasks/".$codice[1]."?access_token=".$codice[2]; 
   
    $curl = curl_init($oauth2token_url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT"); 
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_ENCODING, "");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 
    curl_exec($curl);
    curl_close($curl);
    } else {
    $post = json_encode(array("status" => "completed"));

    $oauth2token_url = "https://www.googleapis.com/tasks/v1/lists/".$codice[0]."/tasks/".$codice[1]."?access_token=".$codice[2]; 
    $curl = curl_init($oauth2token_url);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_ENCODING, "");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 
    curl_exec($curl);
    curl_close($curl);

    }
?>