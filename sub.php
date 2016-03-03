<?php
	include 'core/init.php';
   $named = $_REQUEST['names'] ;
   $named = strtoupper(str_replace("_"," ", $named));
   $id = $_REQUEST['id'] ;
	get_sub($named,$id );
?>