<?php 

header('Content-Type: text/plain; charset=utf-8;'); 
$file = file_get_contents("https://clearfollow.com/api.php?t=m&q=USERNAME"); 
print_r(json_decode($file)); 

?>