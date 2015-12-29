<?php require '../../../../core/init.php';


if(isset($_GET['id'])) {
$query = query("DELETE FROM orders WHERE order_id = " . escape_string($_GET['id']) . " ");
$query = query("DELETE FROM reports WHERE order_id = " . escape_string($_GET['id']) . " ");
confirm($query);
set_message("Order Deleted");
redirect("/admin?orders");
} else {
redirect("/admin?orders");
}
?>