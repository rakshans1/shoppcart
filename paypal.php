<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") die ("No Post Variables");
// Initialize the $req variable and add CMD key value pair
$req = 'cmd=_notify-validate';
// Read the post from PayPal
foreach ($_POST as $key => $value) {
    $value = urlencode(stripslashes($value));
    $req .= "&$key=$value";
}
$url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
$curl_result=$curl_err='';
$ch = curl_init();
curl_setopt($ch, CURLOPT_CAINFO, '/cacert.pem');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded", "Content-Length: " . strlen($req)));
curl_setopt($ch, CURLOPT_HEADER , 0);   
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$curl_result = @curl_exec($ch);
$curl_err = curl_error($ch);
curl_close($ch);
$req = str_replace("&", "\n", $req);  // Make it a nice list in case we want to email it to ourselves for reporting
// Check that the result verifies
if (strpos($curl_result, "VERIFIED") !== false) {
    $req .= "\n\nPaypal Verified OK";
} else {
    $req .= "\n\nData NOT verified from Paypal!";
    mail("shetty.raxx555@gmail.com", "IPN interaction not verified", "$req", "From: shetty.raxx555@gmail.com" );
    exit();
}
/* CHECK THESE 4 THINGS BEFORE PROCESSING THE TRANSACTION, HANDLE THEM AS YOU WISH
1. Make sure that business email returned is your business email
2. Make sure that the transaction’s payment status is “completed”
3. Make sure there are no duplicate txn_id
4. Make sure the payment amount matches what you charge for items. (Defeat Price-Jacking) */
 

?>