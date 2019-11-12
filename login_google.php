<?php
session_start();
include("db/dbi.php");

echo "11111111111111";
//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
require_once ('libraries/Google/autoload.php');
$client_id = '336345041350-3fudfv7k9odp9er6pb6b72ma95gfj7sg.apps.googleusercontent.com'; 
$client_secret = 'wVtihbuPYozTYi7qyI0wjkhR';
$redirect_uri = 'http://www.sisoft.in/index2.php';

 if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
}

/************************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 ************************************************/
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");

/************************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 ************************************************/
$service = new Google_Service_Oauth2($client);

/************************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
*/
  
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  echo $_GET['code'] ;
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  exit;
}

/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
} else {
  $authUrl = $client->createAuthUrl();
}
	 
	//show user picture
	// echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';
	 
	
?> 

									
									
									
									
<?php  
	if (!isset($authUrl))
									{ 
	$user = $service->userinfo->get(); //get user info 
	
	// connect to database
	
	$_SESSION['login']=$user->name ;
	
	//check if user exist in database using COUNT
	$result = $conn->query("SELECT COUNT(google_id) as usercount FROM google_users WHERE google_id=$user->id");
	$user_count = $result->fetch_object()->usercount; //will return 0 if user doesn't exist
	if($user_count==0) //if user does not exist and has not logged earlier using google Id.
    {
       // echo 'Hi '.$user->name.', Thanks for Registering! [<a href="'.$redirect_uri.'?logout=1">Log Out</a>]';
		$statement = $conn->prepare("INSERT INTO google_users (google_id, google_name, google_email, google_link, google_picture_link) VALUES (?,?,?,?,?)");
		$statement->bind_param('issss', $user->id,  $user->name, $user->email, $user->link, $user->picture);
		$statement->execute();
		echo "123:".$conn->error;
		
		
		$reg_source= 'GOOGLE';
		$date= date("Y-m-d H:i:s");
		$ip = $_SERVER['REMOTE_ADDR'];
		$user_statement = $conn->prepare("INSERT INTO users (username, userlogin, reg_source, dtm_created, ip_created) VALUES (?,?,?,?,?)");
		$user_statement->bind_param('sssss', $user->name, $user->email, $reg_source, $date, $ip );
		$user_statement->execute();
		echo "124".$conn->error;
    }
	
	
} 
?>