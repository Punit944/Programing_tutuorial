<?php
// fgets(filepointer): prints one line from the file
// fgetc(filepointer): prints one char from the files

$fptr = fopen("file.txt","r");

// while($a = fgets($fptr))
// {
// 	echo $a;
// 	echo "<br>";
// }

while($a = fgetc($fptr))
{
	echo $a;
	if($a ==".")
	{
		break;
	}
}
fclose($fptr);
echo "<br>end reached";

?>
