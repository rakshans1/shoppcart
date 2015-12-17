<h2 class="title text-center">Featured Items From all Categories</h2>
<?php


  $conn = mysqli_connect("localhost","root","","shoppcart") ;
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   
   $sql = 'SELECT * FROM `cat` ORDER BY     RAND() LIMIT 0,6;';
   $result = $conn->query($sql);

   

 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      
    $pname=$row["pname"];
    $pprice=$row["pprice"];  
    $pimage=$row["pimage"];  
    $pdesc=$row["pdesc"];  
    $pquant=$row["pquant"];       

    include  "../sub/feature.php";


          }
   } else {
    echo "0 results";
}   


   mysqli_close($conn);
?>