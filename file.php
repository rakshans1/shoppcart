<?php 




$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pimage=$_POST['pimage'];
$pdesc=$_POST['pdesc'];
$pquant=$_POST['pquant'];
$sub=$_POST['sub'];




$con = mysqli_connect("localhost","root","","categories") ;


$que="insert into cat(pname,pprice,pimage,pdesc,pquant,sub) values('$pname','$pprice','$pimage','$pdesc','$pquant','$sub') ";

mysqli_query($con, $que);

echo "Record add Done";
mysqli_close($con);
?>
