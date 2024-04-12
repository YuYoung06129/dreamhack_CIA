<?php
$command = './cache '.$_POST['configure_options'];

$escaped_command = escapeshellcmd($cmd);
 
system($escaped_command);
?>