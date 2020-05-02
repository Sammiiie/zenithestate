<?php
// hello i will include the connection
include("connect.php")?>
<!-- i will make the query for viewing data inside the database  -->
<?php

if(isset($_GET['sn']) && $_GET['sn'] !== '') {
    $sn = $_GET['sn'];

$name = $_POST['author'];
$title = $_POST['title'];
$preview = $_POST['preview'];
$post= $_POST['post'];
$simage = $_FILES['simage']['name'];
$pimage = $_FILES['pimage']['name'];
$target_dir = "../img/post/";
$target_file = $target_dir . basename($_FILES['pimage']['name']);
$target_dir2 = "../img/slider/";
$target_file2 = $target_dir2 . basename($_FILES['simage']['name']);

$query = "UPDATE info SET author = '$name', title = '$title', preview = '$preview', post = '$post', simage = '$simage', images = '$pimage' WHERE id = '$sn'";
// hello here i will add
$result = mysqli_query($connection, $query);

var_dump($result);
if ($result) {
    // Upload file
    move_uploaded_file($_FILES['pimage']['tmp_name'],$target_dir.$pimage);
    move_uploaded_file($_FILES['simage']['tmp_name'],$target_dir2.$simage);
    // success
    header("Location: ../admin/info.php");
    exit;
} else {
    //Display an error
    echo "<p>User creation failed</p>";
}
} else {
    echo "BAD";
}

mysqli_close($connection);
?>