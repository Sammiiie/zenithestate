<?php
// hello i will include the connection
include("connect.php")?>
<!-- i will make the query for viewing data inside the database  -->
<?php

// $target_dir2 = "../img/property/";
// $target_file2 = $target_dir2 . basename($_FILES['simage']['name']);
if(isset($_GET['sn']) && $_GET['sn'] !== '') {
    $sn = $_GET['sn'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $phone2 = $_POST['phone2'];
    $title = $_POST['title'];
    $transacttype = $_POST['stype'];
    $propertytype = $_POST['ptype'];
    $description= $_POST['description'];
    $urgency = $_POST['urgency'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $pros = $_POST['pros'];
    $cons = $_POST['cons'];
    $fimage = $_FILES['fimage']['name'];
    $target_dir = "../img/property/";
    $target_file = $target_dir . basename($_FILES['fimage']['name']);
    for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
    {
        $pimage = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));    
    $query = "UPDATE properties  SET (vendor, title, description, fimage, images, phone, phone2, email, property_type, price,
    location, pros, cons, transaction_state, urgency)
    VALUE ('{$name}', '{$title}', '{$description}', '{$fimage}', '{$pimage}', '{$phone}', '{$phone2}', '{$email}', '{$propertytype}',
    '{$price}', '{$location}', '{$pros}', '{$cons}', '{$transacttype}', '{$urgency}' WHERE id = '$sn')";
    // hello here i will add
    $result = mysqli_query($connection, $query);

var_dump($result);
if ($result) {
    // Upload file
    move_uploaded_file($_FILES['fimage']['tmp_name'],$target_dir.$fimage);
    // move_uploaded_file($_FILES['simage']['tmp_name'],$target_dir2.$simage);
    // success
    header("Location: ../admin/properties.php");
    exit;
} else {
    //Display an error
    echo "<p>User creation failed</p>";
}
 }
}
?>