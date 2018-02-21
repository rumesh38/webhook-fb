<?php

require_once "Firebase/vendor/autoload.php";

use Kreait\Firebase\Configuration;
use Kreait\Firebase\Firebase;

$config = new Configuration();
$config->setAuthConfigFile("webhook-b14b4-firebase-adminsdk-fcj9f-1f5d795eea.json");
$fb = new Firebase('https://webhook-b14b4.firebaseio.com/', $config);

$hit = ["time"=>time()];
$fb->push($hit, 'hit/');
echo $_GET["hub_challenge"];

?>