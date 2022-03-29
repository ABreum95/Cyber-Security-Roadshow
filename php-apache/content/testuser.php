<?php 

  $mydir = 'uploads/testuser'; 

  $myfiles = array_diff(scandir($mydir), array('.', '..')); 

  foreach($myfiles as $filename){
        echo $filename, '<br>';    

}?>