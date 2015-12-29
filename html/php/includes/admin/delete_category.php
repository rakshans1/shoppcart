 <?php require '../../../../core/init.php';
if(isset($_GET['id'])) {
$query = query("DELETE FROM categories WHERE cat_id = " . escape_string($_GET['id']) . " ");
confirm($query);
set_message("Category Deleted");
redirect("/admin?categories");
} else {
redirect("/admin?categories");
}
?>
