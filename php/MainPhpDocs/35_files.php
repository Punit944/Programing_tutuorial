<?php

$fptr = fopen("file.txt","r");
// echo var_dump($fptr);

if(!$fptr)
{
	die("Invalid fileName");
}
$content = fread($fptr, filesize("file.txt"));
echo $content;

fclose($fptr);

?>