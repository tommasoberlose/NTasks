<?

$client_id = "51245104853.apps.googleusercontent.com"; 
$client_secret = "nGKcnxpYbYavNK1xtS_pepXK";
$redirect_uri = "http://www.ntasks.altervista.org/";
$scope = "https://www.googleapis.com/auth/tasks+https://www.googleapis.com/auth/userinfo.email+https://www.googleapis.com/auth/userinfo.profile"; 
$state = "profile"; 
$access_type = "offline";

$loginUrl = sprintf("https://accounts.google.com/o/oauth2/auth?scope=%s&state=%s&redirect_uri=%s&response_type=code&client_id=%s&access_type=%s", $scope, $state, $redirect_uri, $client_id, $access_type);

?>