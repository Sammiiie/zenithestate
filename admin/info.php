<?php

$page_title = "Info";
include("header.php");
// include("connect.php")

?>

<!-- Content window -->
<div class="content-wrapper"> 
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $page_title ?></li>
        <li class="breadcrumb-item" data-toggle="tooltip" data-placement="right" title="Create Info">
          <a href="create_info.php"><i class="fa fa-plus-circle"></i></a>
        </li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Insert content here -->
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
              <!-- col-lg-4 -->
                
                <!-- /col-g-4 -->
              <!-- Table starts -->
              <div class="col-lg-12">
                <!-- <div class="panel panel-default"><b>Properties</b></div> -->
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                      <thead>
                      <?php
                        $query = "SELECT * from info";
                        $result = mysqli_query($connection, $query);
                        ?>
                        <tr>
                          <!-- <th>#</th> -->
                          <th>Author</th>
                          <th>Title</th>
                          <!-- <th>Slider</th> -->
                          <!-- <th>Price</th> -->
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {?>  
                          <tr>
                            <!-- <td><?php //echo $row["userid"]; ?></td> -->
                            <td><?php echo $row["author"]; ?></td>
                            <td><?php echo $row["title"]; ?></td>
                            <td><a href="manage_info.php?edit=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a></td>
                            <td><a href="../functions/delete_info.php?sn=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
                          </tr>
                       <?php }
                      }
                      else {
                        // echo "0 Document";
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- table ends -->
              </div>
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