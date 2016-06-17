<?     
    $oauth2token_url = "https://accounts.google.com/o/oauth2/revoke?token=".$_GET["token"];     
    $curl = curl_init($oauth2token_url);
 
    curl_setopt($curl, CURLOPT_HTTPGET, true);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $json_response = curl_exec($curl);
    curl_close($curl);
    setcookie("token_log", "", time()-3600); 
    header("Location: http://www.ntasks.altervista.org/login.php?logout=true");
?>
