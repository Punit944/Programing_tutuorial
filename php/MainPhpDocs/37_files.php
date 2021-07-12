<?php
echo "sas";
// $fptr = fopen("file1.txt","w");
$fptr = fopen("file1.txt","a");
fwrite($fptr,"today is a special dae\n");

fclose($fptr);

//fwrite in w mode = rewrites the file and create new if not exists
//fwrite in a mode = append to the existing file

?>