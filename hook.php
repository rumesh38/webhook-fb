<?php
$access_token = "EAAcWxl9vZAeABAPhchvPTIaObJ6IciO33fxtUdEBWXP3ffF0NrgOf6OYnOsEn8ZBNi07mOCgHIsBe8UwAJhu8cXrUo8EjTB7lXmlXjaZASdnncpG9Uh37HGstpzO2FkqQWcVuijSCoUbqZBSS9eYy8Qze4udgq03uZB91aDWJi51wEmnTkZCTmaQnQOmRhrXgZD";
$verify_token = "rumesh38";
$hub_verify_token = null;

$content = json_decode(file_get_contents("php://input"),true);



if(isset($_REQUEST['hub_challenge'])) {
 	$challenge = $_REQUEST['hub_challenge'];
 	$hub_verify_token = $_REQUEST['hub_verify_token'];
}
if ($hub_verify_token === $verify_token) {
 	echo $challenge;
}
?>