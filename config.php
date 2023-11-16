<?php

require_once("./conn.php");

##### Google App Configuration #####
$googleappid = "1################apps.googleusercontent.com"; 
$googleappsecret = "GOCSPX-xH#####################sACi7QgO_M_mLp"; 
$redirectURL = "http://localhost/Goo/authenticate.php"; 

##### Required Library #####
include_once 'src/Google/Google_Client.php';
include_once 'src/Google/contrib/Google_Oauth2Service.php';

$googleClient = new Google_Client();
$googleClient->setApplicationName('Goo travel');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($googleClient);
?>
