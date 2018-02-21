<?php

require_once "Firebase/vendor/autoload.php";

use Kreait\Firebase\Configuration;
use Kreait\Firebase\Firebase;

$config = new Configuration();
$config->setAuthConfigFile("webhook-b14b4-firebase-adminsdk-fcj9f-1f5d795eea.json");
$fb = new Firebase('https://online-khaja-9892c.firebaseio.com/', $config);

$hit = date("Y-m-d hh:mm:ss");
$fb->push($hit, 'hit/');
echo $_GET["hub_challenge"];

?>