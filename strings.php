<?php
header('Content-Type: text/html; charset=utf-8');

$var = "Bye!";
echo "First text" . ' other text' . $var;
echo '<br/>';
echo "It's a raining day Нещо на кирилица тук. \"Some name\" ";

$arr = explode(",", "This long, long text, that, never ends.");
print_r($arr);
echo '<br/>';
echo ord('5');
echo chr(63);
echo '<br/>';
$username = " admin  	";
$user = trim($username); //$user = "admin";

$pass = "da";
//$pass = sha1($pass);

echo strlen($pass);
echo '<br/>';
echo strstr("I love php, I love php too!","php");
echo '<br/>';
echo substr("Hello world. The world is not enough!", -11, 3);

?>