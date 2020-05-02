<?php

$page_title = "User management";
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
        <li class="breadcrumb-item active"><?php echo $page_title ?></li>
        <li class="breadcrumb-item" data-toggle="tooltip" data-placement="right" title="Create Profile">
          <!-- <a href="create_profile.php"><i class="fa fa-plus-circle"></i></a> -->
        </li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Insert content here -->
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
              <!-- col-lg-4 -->
                <div class="col-lg-4">
                  <div class="panel panel-default">
                    <div class="panel-heading"><b>Create Profile</b></div>
                    <div class="panel-body">
                      <!-- form starts here -->
                      <form action="../functions/manage_users_data.php" method="post">
                        <div class="form-group">
                          <label for="">Name</label>
                          <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Address</label>
                          <input name="address" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Username</label>
                          <input name="username" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">User Types</label>
                          <select name="user_type" id="" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Staff">Staff</option>
                            <option value="Vendor">Vendor</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone</label>
                            <input type="tel" name="phone" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Phone">Other Phone</label>
                            <input type="tel" name="phone2" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Sex</label>
                          <select name="sex" id="" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                        <button class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                      <!-- Form ends here -->
                    </div>
                  </div>
                </div>
                <!-- /col-g-4 -->
              <!-- Table starts -->
              <div class="col-lg-8">
                <div class="panel panel-default"><b>Profiles</b></div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                      <thead>
                      <?php
                        $query = "SELECT * from users";
                        $result = mysqli_query($connection, $query);
                        ?>
                        <tr>
                          <!-- <th>#</th> -->
                          <th>Name</th>
                          <th>Usertype</th>
                          <th>Phone</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {?>  
                          <tr>
                            <!-- <td><?php //echo $row["userid"]; ?></td> -->
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["usertype"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><a href="update_users.php?edit=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a></td>
                            <td><a href="../functions/delete_users.php?sn=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
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