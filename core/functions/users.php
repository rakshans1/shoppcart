<?php 
/************************admin users***********************/
function display_users() {
$category_query = query("SELECT * FROM users");
confirm($category_query);
while($row = fetch_array($category_query)) {
$user_id = $row['user_id'];
$username = $row['username'];
$first_name = $row['first_name'];
$email = $row['email'];
$active = $row['active'];
$type = $row['type'];
$user = <<<DELIMETER
<tr>
    <td>{$user_id}</td>
    <td>{$username}</td>
    <td>{$first_name}</td>
     <td>{$email}</td>
     <td>{$active}</td>
     <td>{$type}</td>
     <td><a class="btn btn-warning" href="/admin?edit_user&id={$row['user_id']}"><span class="glyphicon glyphicon glyphicon-pencil"></span></a></td>
    <td><a class="btn btn-danger" href="html/php/includes/admin/delete_user.php?id={$row['user_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>
DELIMETER;
echo $user;
    }
}
function update_user_admin() {
if(isset($_POST['update_user']) && empty($_POST['update_user']) === false) {
$active  = escape_string($_POST['active']);
$type    = escape_string($_POST['type']);
$query = "UPDATE users SET ";
$query .= "active  = '{$active}', ";
$query .= "type    = '{$type} '   ";
$query .= " WHERE user_id =" . escape_string($_GET['id']);
$send_update_user = query($query);
confirm($query);
set_message("User has been updated ");
        }
}
/*********************************************user access Functions******************/
function has_access($user_id,$type){
	$user_id = (int)$user_id;
	$type = (int)$type;
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `user_id` = '$user_id' AND `type` = '$type' "),0)==1)? true : false;
}
/*********************************************user data recover Functions******************/
function recover($mode,$email){
	$mode = sanitize($mode);
	$email = sanitize($email);
	$user_data = user_data(user_id_from_email($email),'user_id','first_name','username');
	if ($mode == 'username') {
		email($email,'Your username',"Hello ".$user_data['first_name'].",\n\nYour username is : ".$user_data['username']."\n\n-Shoppcart");
	}elseif ($mode == 'password') {
		$generated_password = substr(md5(rand(999, 999999)),0,8);
		change_password($user_data['user_id'],$generated_password);
		$user_id = $user_data['user_id'];
		mysql_query("UPDATE `users` SET `password_recover`=1 WHERE `user_id` = '$user_id'");
		email($email,'Your Password',"Hello ".$user_data['first_name'].",\n\nYour New Password is : ".$generated_password."\n\n-Shoppcart");
	}
}
/*********************************************user data update Functions******************/
function update_user($update_data){
	$update =array();
	array_walk($update_data, 'array_sanitize');
	foreach ($update_data as $field => $data) {
		$update[] = '`'.$field . '`=\''.$data.'\'';
	}
	mysql_query("UPDATE `users` SET " . implode(', ', $update) . " WHERE `user_id` =" . $_SESSION['user_id']);
} 
/*********************************************Email Activation Functions******************/
function activate($email,$email_code){
	$email = mysql_real_escape_string($email);
	$email_code = mysql_real_escape_string($email_code);
	if (mysql_result( mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$email' AND `email_code`= '$email_code' AND `active`= 0"),0)==1) {
		mysql_query("UPDATE `users` SET `active`=1 WHERE `email` = '$email'");
		return true;
	}else  {
		return false;
	}
}
/*********************************************Change Password******************/
function change_password($user_id,$password){
	$user_id = (int)$user_id;
	$password = md5($password);
	mysql_query("UPDATE `users` SET `password_recover`=0 WHERE `user_id` = '$user_id'");
	mysql_query("UPDATE `users` SET `password` = '$password' WHERE `user_id` = $user_id");
}
/*********************************************register Functions******************/
function register_user($register_data){
	include 'msg.php';
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = md5($register_data['password']); 
	$fields = '`'.implode('`, `',array_keys($register_data)).'`';
	$data = '\''.implode('\', \'',$register_data).'\'';
	mysql_query("INSERT INTO `users` ($fields) VALUES ($data) ");
	email($register_data['email'],'Activate Account...!!!',$message );
	$uid='9870827360';$pwd='8111988';$to=$register_data['mobile_number'];$msg='Welcome to Shoppcart,Check your Email to activate Your Account';
	include 'sms.php';
}
function user_count(){
	return mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `active` = 1 "), 0);
}
function user_data($user_id){
	$data = array();
	$user_id = (int)$user_id;
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	if ($func_get_args > 1) {
		unset($func_get_args[0]);
		$fields = '`'. implode('`, `', $func_get_args). '`';
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `user_id` = $user_id" ));
		return $data;
	}
}
/*********************************************Log in Functions******************/
function logged_in(){
	return (isset($_SESSION['user_id']))? true : false;
}
function user_exits($username){
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'"), 0) == 1 ) ? true : false;
}
function email_exits($email){
	$email = sanitize($email);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$email'"), 0) == 1 ) ? true : false;
}
function mobile_number_exits($mobile_number){
	$mobile_number = sanitize($mobile_number);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `mobile_number` = '$mobile_number'"), 0) == 1 ) ? true : false;
}
function user_active($username){
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1 "), 0) == 1 ) ? true : false;
}
function user_id_from_username($username){
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username`= '$username' "), 0 , 'user_id');
}
function user_id_from_email($email){
	$email = sanitize($email);
	return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `email`= '$email' "), 0 , 'user_id');
} 
function login($username, $password) {
	$user_id = user_id_from_username($username);
	$username = sanitize($username);  
	$password = md5($password);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username`= '$username' AND `password` = '$password' "), 0) == 1) ? $user_id : false;
}
?>