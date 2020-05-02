<?php

$page_title = "Dashboard";
include('header.php');
// include("connect.php");

?>


<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <!-- <li class="breadcrumb-item active">Collection</li> -->
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Page Content here -->
          <div class="row">
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-bell-o"></i>Recent Requests</div>
                
              <div class="list-group list-group-flush small">
              <?php
                                    //   $conn = include_once("config.php");
                                    $sql = "SELECT * FROM requests";

                                  //   $stmt = mysqli_prepare($link, $sql);
                                    $result = mysqli_query($connection,$sql);
                                    if ($result->num_rows > 0){
                                      $num_rows = mysqli_num_rows($result);
                                         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                  ?>
                <a class="list-group-item list-group-item-action" href="view_request.php?edit=<?php echo $row["id"]; ?>">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong><?php echo $row["name"]; ?></strong> Sent a message in respect to
                      <strong><?php echo $row["property"]; ?></strong>.
                      <div class="text-muted smaller">at <?php echo $row["time"]; ?></div>
                    </div>
                  </div>
                </a>
                                         <?php }
                                    }
                                         ?>
                
                
                
                <a class="list-group-item list-group-item-action" href="request.php">View all Requests...</a>
              </div>
              <div class="card-footer small text-muted">Live Update</div>
            </div>
          </div>
          <!-- /requests -->
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-pie-chart"></i> Overview</div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Live Update</div>
            </div>
          </div>
          </div>
          <!-- /content ends here -->
      </div>
    </div>


<?php

include("footer.php");

?>
