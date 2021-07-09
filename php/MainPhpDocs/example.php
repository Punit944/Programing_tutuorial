<?php

$sno = 4;
$name = "sam";
$desc = "what is sir";

$number = 1;

echo '<div class="container">
<table class="table">
<thead>
 <tr>
   <th scope="col">sno.</th>
   <th scope="col">Name</th>
   <th scope="col">Description</th>
   <th scope="col">Delete</th>
 </tr>
</thead>
<tbody>';

while($sno!=NULL)
{
    echo ' 
    <tr>
    <th scope="row">'.$number.'</th>
    <td>'.$name.'</td>
    <td>'.$desc.'</td>
    <td><button type="button" class="btn btn-primary btn-sm">Delete</button></td>
    </tr>';
    
    $number++;
    $sno--;
}

 echo '
</tbody>
</table>';


?>