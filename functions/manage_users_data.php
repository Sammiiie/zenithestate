<?php
// hello i will include the connection
include("connect.php")?>
<!-- i will make the query for viewing data inside the database  -->
<?php
$name = $_POST['name'];
$address = $_POST['address'];
$username = $_POST['username'];
$user_type = $_POST['user_type'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$phone2 = $_POST['phone2'];
$sex = $_POST['sex'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (name, address, username, usertype, email, phone, phone2, sex, password)
VALUE ('{$name}', '{$address}', '{$username}', '{$user_type}', '{$email}', '{$phone}', '{$phone2}', '{$sex}', '{$password}')";
// hello here i will add
$result = mysqli_query($connection, $query);
if ($result) {
    // success
    header("Location: ../admin/manage_users.php");
    exit;
} else {
    //Display an error
    echo "<p>User creation failed</p>";
}
?>