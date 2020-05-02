<?php
// here i am going to add the connection
include("connect.php");
// another for inputting the data 

if(isset($_GET['sn']) && $_GET['sn'] !== '') {
    $sn = $_GET['sn'];

    echo $sn;
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $designation = $_POST['usertype'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $phone2 = $_POST['phone2'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE users SET name= '$name', sex= '$sex', address= '$address', email= '$email', 
    usertype= '$designation', username= '$username', phone= '$phone', phone2= '$phone2', password= '$password' WHERE id = '$sn'";
    // add
    $result = mysqli_query($connection, $query);
    if ($result) {
        // successfully inserted the data
        header("Location: ../admin/manage_users.php");
        exit;
    } else {
        // Display an error message
        echo "<p>User update failed</p>";
    }
    var_dump($connection);
    // close statement
    // mysqli_stmt_close($stmt);
} else {
    echo "BAD";
}

mysqli_close($connection);
?>