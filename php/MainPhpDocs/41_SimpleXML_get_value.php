<?php 

$xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
echo $xml->to."<br>";
echo $xml->form."<br>";
echo $xml->heading."<br>";
echo $xml->body."<br>";

?>