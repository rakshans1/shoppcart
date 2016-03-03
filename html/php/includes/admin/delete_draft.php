<?php require '../../../../core/init.php';
if(isset($_GET['id'])) {
$log = query("INSERT INTO log (pname, moderate_name) SELECT pname, moderate_name FROM draft WHERE draft_id = " . escape_string($_GET['id']) . "  ");
confirm($log);
$draft = query("DELETE FROM draft WHERE draft_id = " . escape_string($_GET['id']) . " ");
confirm($draft);
$image= '../../../../'.$_GET['i'];
echo $image;
unlink($image);

set_message("Draft Deleted");
redirect("/admin?draft");


} else {

redirect("/admin");


}






 ?>