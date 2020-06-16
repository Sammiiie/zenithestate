<?php
// here i am going to add the connection
include("connect.php");?>
<!-- another for inputting the data -->
<?php
if(isset($_GET['edit']) && $_GET['edit'] !== '') {
    $sn = $_GET['edit'];

    echo $sn;
        
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE users SET password= '$password' WHERE userid = '$sn'";
    // add
    $result = mysqli_query($connection, $query);
    if ($result) {
        // successfully inserted the data
        header("Location: ../manage_users.php");
        exit;
    } else {
        // Display an error message
        echo "<p>Failed to change password</p>";
    }
    var_dump($connection);
    // close statement
    // mysqli_stmt_close($stmt);
} else {
    echo "BAD";
}

mysqli_close($connection);
?>