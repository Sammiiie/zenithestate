<?php

$page_title= "requests";


include("header.php");

?>

<!-- Content window -->
<div class="content-wrapper"> 
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Request</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Insert content here -->
          <!-- <div class="panel panel-default">Requests Made</div> -->
            <div class="panel-body">
                <div class="table-responsive">.
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                    <?php
                                    //   $conn = include_once("config.php");
                                    $sql = "SELECT * FROM requests";

                                  //   $stmt = mysqli_prepare($link, $sql);
                                    $result = mysqli_query($connection,$sql);
                                  ?>
                        <thead>
                            <!-- <th>#</th> -->
                            <th>Name</th>
                            <th>Number</th>
                            <th>Property</th>
                            <th>Message</th>
                            <th></th>
                        </thead>
                        <tbody>
                        <?php if ($result->num_rows > 0){
                                   $num_rows = mysqli_num_rows($result);
                                      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                            <tr>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["phone"]; ?></td>
                                        <td><?php echo $row["property"]; ?></td>
                                        <td><?php echo $row["message"]; ?></td>
                                        <td><a href="view_request.php?edit=<?php echo $row["id"]; ?>" class="btn btn-info">View</a></td>
                            </tr>
                        <?php }
                                        //   this code helps to check the count of data in the table
                                    //   echo "$num_rows found";
                                  }
                                  else {
                                    // echo "0 Documents";
                                 }
                                 
                                 // Close statement
                                //  mysqli_stmt_close($stmt);
                                      ?>
                        </tbody>
                    </table>
                </div>
            </div>
          <!-- Content ends here -->
        </div>
      </div>
</div>
<!-- Content window ends here -->

<?php

include("footer.php");

?>