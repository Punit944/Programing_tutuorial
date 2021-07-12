<?php 

  $data = $_GET['datavalue'];

  $maha = array('pune','Mumbai','punit');
  $up = array('goracput','lucknow');
  $bihar = array('patanm','kishangaput');
  $mp = array('ujjain','mahidpur','mahidpur','indore');
  
  if($data == 'Mahrashtra')
  {
   foreach ($maha as $al) {
       echo "<option>$al</option>";
   }
  }
 else if($data == 'up')
  {
   foreach ($up as $al) {
       echo "<option>$al</option>";
   }
  }
 else if($data == 'Bihar')
  {
   foreach ($bihar as $al) {
       echo "<option>$al</option>";
   }
  }
 else if($data == 'mp')
  {
   foreach ($mp as $al) {
       echo "<option>$al</option>";
   }
  }

 ?>