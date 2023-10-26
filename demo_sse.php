<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
$name = htmlspecialchars($_GET["name"]);
echo "data: The server time is: {$time} and name is {$name}\n\n";


flush();
?>
