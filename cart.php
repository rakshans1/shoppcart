<?php include 'core/init.php';
protect_page();

if (isset($_GET['add'])) {
	$add = sanitize($_GET['add']);
	$query = query("SELECT * FROM products WHERE p_id = $add ");
	confirm($query);
	while($row = fetch_array($query)){
		if($row['pquant'] != $_SESSION['product_' . $_GET['add']]) {
			$_SESSION['product_' . $_GET['add']]+=1;
			redirect("checkout");
		}else{
			set_message("We only have " .$row['pquant']. " " . "available");
			redirect("checkout");
		}
	}
}
if (isset($_GET['remove'])) {
	$_SESSION['product_' . $_GET['remove']]--;
	if ($_SESSION['product_' . $_GET['remove']] < 1) {
		unset($_SESSION['item_total']);
      	unset($_SESSION['item_quantity']);
		redirect("checkout");
	}else{
		redirect("checkout");
	}
}
if (isset($_GET['delete'])) {
  $_SESSION['product_' . $_GET['delete']] = '0';
  unset($_SESSION['item_total']);
  unset($_SESSION['item_quantity']);
  unset($_SESSION['product_'. $_GET['delete']]);
  redirect("checkout");
 }
function cart(){
	$total = 0;
	$item_quantity = 0;
	$item_name = 1;
	$item_number =1;
	$amount = 1;
	$quantity =1;
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
		if (substr($name, 0, 8) == "product_") {
			$length = strlen($name - 8);
			$id = sanitize(substr($name, 8,$length)); 
			$query = query("SELECT * FROM products WHERE p_id = $id");
			confirm($query);
			while($row = fetch_array($query)) {
			$sub	= $row['pprice']*$value;
			$item_quantity +=$value;
			$srt = strtoupper(str_replace("_"," ","{$row['pname']}"));
			$product = <<<DELIMETER
				<tr>
				  <td><div class=row><div class=col-md-3><img width='50' src='{$row['pimage']}'>
				  </div><div class=col-sm-9><a href="{$row['pname']}"><strong>$srt</strong></a><br>
				  </div>
				  </div>
				  </td>
				  <td>&#8377; {$row['pprice']}</td>
				  <td>{$value}</td>
				  <td>&#8377; $sub</td>
				  <td><a class='btn btn-success' href="cart?add={$row['p_id']}"><span class='glyphicon glyphicon-plus'></span></a>   <a class='btn btn-warning' href="cart?remove={$row['p_id']}"><span class='glyphicon glyphicon-minus'></span></a>
				<a class='btn btn-danger' href="cart?delete={$row['p_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>         
				  </tr>
				  <input type="hidden" name="item_name_{$item_name}" value="{$srt}">
				  <input type="hidden" name="item_number_{$item_number}" value="{$row['p_id']}">
				  <input type="hidden" name="amount_{$amount}" value="{$row['pprice']}">
			      <input type="hidden" name="quantity_{$quantity}" value="{$value}">
DELIMETER;
			echo $product;	
			$item_name++;
			$item_number++;
			$amount++;
			$quantity++;
		
			}
			$_SESSION['item_total'] = $total += $sub;
			$_SESSION['item_quantity'] = $item_quantity;
   }
}
 }
}
function show_paypal() {
if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1) {
$paypal_button = <<<DELIMETER
	
    <input type="image" name="upload" border="0"
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
alt="PayPal - The safer, easier way to pay online">
DELIMETER;
return $paypal_button;
  }
} 
function process_transaction($payment_amount,$payment_currency,$txn_id,$payment_status){
	$amount 		=	$payment_amount;
	$currency 		= 	$payment_currency;
	$transaction	= 	$txn_id;
	$status 		=  	$payment_status;
	$total = 0;
	$item_quantity = 0;
	$send_order = query("INSERT INTO orders (order_amount, order_transaction, order_currency, order_status,order_user_id ) VALUES('{$amount}', '{$transaction}','{$currency}','{$status}','{$_SESSION['user_id']}')");
	$last_id =last_id();
	confirm($send_order);
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
		if (substr($name, 0, 8) == "product_") {
			$length = strlen($name - 8);
			$id = sanitize(substr($name, 8,$length));
			$query = query("SELECT * FROM products WHERE p_id = $id");
			confirm($query);
			while($row = fetch_array($query)) {
			$pprice = $row['pprice'];
			$sub	= $row['pprice']*$value;
			$pprice = $row['pprice'];
			$item_quantity +=$value;
			$srt = strtoupper(str_replace("_"," ","{$row['pname']}"));
			$new_quant = $row['pquant'] - $value; 
			$update_product_quant =  query("UPDATE products SET pquant = '{$new_quant}' WHERE p_id =  {$id} ");
			confirm($update_product_quant);
			$insert_report = query("INSERT INTO reports (p_id,order_id,pname, pprice, pquant,report_user_id) VALUES('{$id}','{$last_id}','{$srt}','{$pprice}','{$value}','{$_SESSION['user_id']}')");
			confirm($insert_report);	
			}
			$total += $sub;
			$item_quantity;
   }
}
 }
	
}
function thank(){
	$total = 0;
	$item_quantity = 0;
	$item_name = 1;
	$item_number =1;
	$amount = 1;
	$quantity =1;
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
		if (substr($name, 0, 8) == "product_") {
			$length = strlen($name - 8);
			$id = sanitize(substr($name, 8,$length)); 
			$query = query("SELECT * FROM products WHERE p_id = $id");
			confirm($query);
			while($row = fetch_array($query)) {
			$sub	= $row['pprice']*$value;
			$item_quantity +=$value;
			$srt = strtoupper(str_replace("_"," ","{$row['pname']}"));
			$product = <<<DELIMETER
				<tr>
				  <td><div class=row><div class=col-md-3><img width='50' src='{$row['pimage']}'>
				  </div><div class=col-sm-9><strong>$srt</strong><br>
				  </div>
				  </div>
				  </td>
				  <td>&#8377; {$row['pprice']}</td>
				  <td>{$value}</td>
				  <td>&#8377; $sub</td>
				  </tr>
DELIMETER;
			echo $product;	
			$item_name++;
			$item_number++;
			$amount++;
			$quantity++;
		
			}
			$_SESSION['item_total'] = $total += $sub;
			$_SESSION['item_quantity'] = $item_quantity;
   }
}
 }
}
function verifyWithPayPal($tx,$at){
}
?>
 
