<!-- <?php 
$myXMLData = "<?xml version='1.0' encoding='UTF-8' ?>
<note>
<to>Tove</to>
<form>Jani</form>
<heading>Reminder</heading>
<body>Don't forget me this weekend! </body>
</note>";

$xml = simplexml_load_string($myXMLData)or die("Error: Cannot Create object");
print_r($xml);

?> -->

<?php  

$xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
print_r($xml);

?>
