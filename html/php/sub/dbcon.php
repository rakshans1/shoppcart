<?php

   $named = $_REQUEST['names'] ;
  $conn = mysqli_connect("localhost","root","","shoppcart") ;
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM cat WHERE sub = "'.$named.'"';
   
   $result = $conn->query($sql);

   

 if ($result->num_rows > 0) {
    echo '<div class="row"><h2 class="title text-center">Featured Items in '.$named.'</h2>';
    while($row = $result->fetch_assoc()) {
      
    $pname=$row["pname"];
    $pprice=$row["pprice"];  
    $pimage=$row["pimage"];  
    $pdesc=$row["pdesc"];  
    $pquant=$row["pquant"];       

    include  "feature.php";


          }
   } else {
    echo "0 results";
}   


   mysqli_close($conn);
?>