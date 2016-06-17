<?


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

function callAPI($token,$what) {
     
    $oauth2token_url = "https://www.googleapis.com/oauth2/v1/userinfo?access_token=".$token;     
    $curl = curl_init($oauth2token_url);
 
    curl_setopt($curl, CURLOPT_HTTPGET, true);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $json_response = curl_exec($curl);
    curl_close($curl);
 
    $authObj = json_decode($json_response);
    return $authObj->$what;
}

function get_oauth2_token($code) {
    global $client_id;
    global $client_secret;
    global $redirect_uri;
     
    $oauth2token_url = "https://accounts.google.com/o/oauth2/token";
    $clienttoken_post = array(
    "code" => $code,
    "client_id" => $client_id,
    "client_secret" => $client_secret,
    "redirect_uri" => $redirect_uri,
    "grant_type" => "authorization_code"
    );
     
    $curl = curl_init($oauth2token_url);
 
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $clienttoken_post);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $json_response = curl_exec($curl);
    curl_close($curl);
 
    $authObj = json_decode($json_response);
    return $authObj;
}

?>