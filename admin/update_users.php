<?php

$page_title = "Edit User";
include("header.php");
// include("connect.php");s

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $sql = "SELECT * FROM users WHERE id='$id'";
    $user = mysqli_query($connection, $sql);
    
  
    // if($standard){
      if (count($user) == 1 ) {
        $n = mysqli_fetch_array($user, MYSQLI_ASSOC);
        $id = $n["id"];
        $name = $n['name'];
        $sex = $n['sex'];
        $designation = $n['usertype'];
        $email = $n['email'];
        $address = $n['address'];
        $username = $n['username'];
        $phone = $n['phone'];
        $phone2 = $n['phone2'];
        $password = $n['password'];
      }else{
        echo "Something is wrong";
      } 
  }

  
?>

<!-- Content window -->
<div class="content-wrapper"> 
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="manage_users.php">Users</a>
        </li>
        <li class="breadcrumb-item active">Edit Member</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Insert content here -->
          <div class="card card-register mx-auto mb-5">
            <div class="card-header">Full Profile</div>
            <div class="card-body">
                <form action="../functions/update_user_data.php?sn=<?php echo $id; ?>" method="post">
                    <!-- Bio -->
                    <div class="form-group">
                          <label for="">Name</label>
                          <input name="name" type="text" value="<?php echo $name; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Address</label>
                          <input name="address" type="text" value="<?php echo $address; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Username</label>
                          <input name="username" type="text" class="form-control" value="<?php echo $username ?>">
                        </div>
                        <?php
                        
                        if($designation == ""){
                        
                        ?>
                        <div class="form-group">
                          <label for="">User Type</label>
                          <select name="usertype" id="" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Staff">Staff</option>
                            <option value="Vendor">Vendor</option>
                          </select>
                        </div>
                        <?php }else{ ?>
                        <div class="form-group">
                            <label for="">User type</label>
                            <input type="text" name="usertype" class="form-control" value="<?php echo $designation ?>" id="">
                        </div>
                        <?php } ?>
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" name="email" value="<?php echo $email ?>" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Phone</label>
                          <input type="tel" name="email" value="<?php echo $phone ?>" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Other Phone</label>
                          <input type="tel" name="email" value="<?php echo $phone2 ?>" id="" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <!-- <div class="form-row"> -->
                                <!-- sex -->
                                <?php
                        
                                if ($sex == "") {

                                ?>
                                <!-- <div class="col-md-6"> -->
                                    <label for="">Sex:</label>
                                    <select name="sex" id="" class="form-control">
                                        <option value="">.....</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                <!-- </div> -->
                                <?php
                                }else{
                                ?>

                                <!-- <div class="col-md-6"> -->
                                    <label for="">Sex:</label>
                                    <input type="text" name="sex" id="" value="<?php echo $sex; ?>" class="form-control" readonly>
                                <!-- </div> -->
                                <?php } ?>
                        </div>
                        <button class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-default">Submit</button>
                </form>
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