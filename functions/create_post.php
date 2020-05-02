<?php
// hello i will include the connection
include("connect.php")?>
<!-- i will make the query for viewing data inside the database  -->
<?php
$name = $_POST['author'];
$title = $_POST['title'];
$preview= $_POST['pview'];
$post= $_POST['post'];
$simage = $_FILES['simage']['name'];
$pimage = $_FILES['pimage']['name'];
$target_dir = "../img/post/";
$target_file = $target_dir . basename($_FILES['pimage']['name']);
$target_dir2 = "../img/slider/";
$target_file2 = $target_dir2 . basename($_FILES['simage']['name']);

$query = "INSERT INTO info(author, title, post, images, simage, preview) 
VALUES ('{$name}','{$title}','{$post}','{$pimage}','{$simage}', '{$preview}')";
// $query = "INSERT INTO info (author, title, preview, post, simage, images)
// VALUE ('{$name}', '{$title}', '{$preview}', '{$post}', '{$simage}', '{$pimage}')";
// hello here i will add
$result = mysqli_query($connection, $query);

var_dump($connection);
if ($result) {
    // Upload file
    move_uploaded_file($_FILES['pimage']['tmp_name'],$target_dir.$pimage);
    move_uploaded_file($_FILES['simage']['tmp_name'],$target_dir2.$simage);
    // success
    header("Location: ../admin/info.php");
    exit;
} else {
    //Display an error
    echo "<p>Info creation failed</p>";
}
?>