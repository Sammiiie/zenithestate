<?php

// Connection
require_once('connect.php');
//echo $_POST['title'];
// if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['property']) && isset($_POST['email'])){
	
	$name = $_POST['name'];
	$dep = $_POST['phone'];
    $topic = $_POST['property'];
    $email = $_POST['email'];
	$request = $_POST['message'];

	$sql = "INSERT INTO requests(name, phone, property, email, message) values ('$name', '$dep', '$topic', '$email', '$request')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
    // echo $sql;
    
    $result = mysqli_query($connection, $sql);
    if ($result) {
        // success
        // Create and send email
        $to = $email; // This is where the form will send a message to.
        // initialize email variables
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $email_subject = "Request Confirmation";
        $email_body = "Your message has been delivered successfully, a personnel of ours would contact you shortly.\n Thank you";
        $headers = "From: noreply@zenithestate.com.ng\n"; // This is the email address the generated message will be from.
        $headers .= "Reply-To: $email_address";   
        mail($to,$email_subject,$email_body,$headers);
        // header("Location: ../admin/manage_users.php");
        header('Location: '.$_SERVER['HTTP_REFERER']);
        exit;
    } else {
        //Display an error
        echo "<p>User creation failed</p>";
    }
	
	

// }


	
?>
