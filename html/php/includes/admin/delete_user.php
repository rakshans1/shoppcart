<?php require '../../../../core/init.php';
if(isset($_GET['id'])) {
$query = query("DELETE FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
confirm($query);
set_message("User Deleted");
redirect("/admin?users");
} else {
redirect("/admin");
}
?>