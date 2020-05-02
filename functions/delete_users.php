<?php
include("connect.php")
?>

<?php
if(isset($_GET['sn']) && $_GET['sn'] !== '') {
    $sn = $_GET['sn'];

    echo $sn;

    $sql = "DELETE FROM users WHERE id='$sn'";
    $stmt = mysqli_prepare($connection, $sql);
    if(mysqli_stmt_execute($stmt)) {
        header("Location: ../admin/manage_users.php");
    } else {
        echo "something went wrong";
    }
    // close statement
    mysqli_stmt_close($stmt);
} else {
    echo "BAD";
}

mysqli_close($connection);
?>