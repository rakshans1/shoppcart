<?php

  
  $conn = mysqli_connect("localhost","root","","shoppcart") ;
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
  $sql = 'SELECT * FROM cat ';
   
   
   $result = $conn->query($sql);

   

 if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
      
    $pname=$row["pname"];
    $p_id =$row["p_id"];
    $srt = str_replace(" ","_","$pname"); 
    
    echo 'UPDATE `cat` SET `pname` = \''.$srt.'\' WHERE `cat`.`p_id` = '.$p_id;
    echo ";<br>";
    
    


          }
   } else {
    echo "0 results";
}   


   mysqli_close($conn);
?>