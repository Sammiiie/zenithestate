<?php

session_start();

$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
  die('No reference supplied');
}

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer sk_test_557d1c78d31b56f4d11860b9c98e613754271901",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if(!$tranx->status){
  // there was an error from the API
  die('API returned error: ' . $tranx->message);
}

if('success' == $tranx->data->status){
  // transaction was successful...
  // please check other things like whether you already gave value for this ref
  // if the email matches the customer who owns the product etc
  // Give value
  echo "<h2>Thank you for subscribing</h2>";
  include("../functions/connect.php");
  $sn = $_SESSION['id'];
  $query = "UPDATE users SET status= 'Exclusive' WHERE id = '$sn'";
    // add
    $result = mysqli_query($connection, $query);
    if ($result) {
        // successfully inserted the data
        header("Location: ../admin/settings.php");
        exit;
    } else {
        // Display an error message
        echo "<p>User update failed</p>";
    }
}
