<?php
include("connect.php")
?>

<?php
if(isset($_GET['sn']) && $_GET['sn'] !== '') {
    $sn = $_GET['sn'];

    echo $sn;

    $sql = "DELETE FROM properties WHERE id='$sn'";
    $stmt = mysqli_prepare($connection, $sql);
    if(mysqli_stmt_execute($stmt)) {
        header("Location: ../admin/properties.php");
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