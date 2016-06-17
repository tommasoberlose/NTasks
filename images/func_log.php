<?
include_once("var.inc");
function get_byrefresh_token($ref) {
    global $client_id;
    global $client_secret;
     
    $oauth2token_url = "https://accounts.google.com/o/oauth2/token";
    $clienttoken_post = array(
    "client_id" => $client_id,
    "client_secret" => $client_secret,
    "refresh_token" => $ref,
    "grant_type" => "refresh_token"
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
               
    $accessToken = $authObj->access_token;
    return $accessToken;
}

if (isset($_COOKIE['token_log'])) {
$token = $_COOKIE['token_log'];
} else {
if(isset($_REQUEST['code'])){
$token_cod = get_oauth2_token($_REQUEST['code']);
setcookie("token_log", $token_cod->access_token, time()+3600);
$token = $_COOKIE['token_log'];
header("Location: http://www.ntasks.altervista.org/");
} else {
header("Location: login.php");
}
}


?>