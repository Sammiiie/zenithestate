<?php
// hello i will include the connection
include("connect.php")?>
<!-- i will make the query for viewing data inside the database  -->
<?php

// $target_dir2 = "../img/property/";
// $target_file2 = $target_dir2 . basename($_FILES['simage']['name']);

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

    $query = "INSERT INTO properties (vendor, title, description, fimage, phone, phone2, email, property_type, price,
            location, pros, cons, transaction_state, urgency)
            VALUE ('{$name}', '{$title}', '{$description}', '{$fimage}', '{$phone}', '{$phone2}', '{$email}', '{$propertytype}',
            '{$price}', '{$location}', '{$pros}', '{$cons}', '{$transacttype}', '{$urgency}')";
            // hello here i will add
            $result = mysqli_query($connection, $query);

            
if ($result) {
    // Upload file
    move_uploaded_file($_FILES['fimage']['tmp_name'],$target_dir.$fimage);
    for($count = 0; $count < count($_FILES["images"]["name"]); $count++)
        {
            $filename = $_FILES["images"]["name"][$count];
            $filetmp = $_FILES["images"]["tmp_name"][$count];
            $filepath= "../img/property/".$filename;

            
            move_uploaded_file($filetmp,$filepath); 
            $pimage = $_FILES["images"]["name"][$count];  
            $query2 = "INSERT INTO images (title, image)
            VALUE ('{$title}', '{$pimage}')";
            $result2 = mysqli_query($connection, $query2);
            // var_dump($connection);
        }
    // move_uploaded_file($_FILES['simage']['tmp_name'],$target_dir2.$simage);
    // success
    if($result2){
        header("Location: ../admin/properties.php");
        exit;
    }
} else {
    //Display an error
    echo "<p>User creation failed</p>";
}
?>