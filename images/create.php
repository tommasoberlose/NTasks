<?     

    $oauth2token_url = "https://www.googleapis.com/tasks/v1/users/@me/lists?access_token=".$_COOKIE['token_log'];
    $post = json_encode(array("title" => $_POST["title"]));
    $curl = curl_init($oauth2token_url);

    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_ENCODING, "");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $json_response = curl_exec($curl);
    curl_close($curl);
 
    $authObj = json_decode($json_response);
              
    echo $authObj->id." ".$authObj->title;


?>