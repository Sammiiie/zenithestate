<?php

$page_title = "Settings";
include("header.php");

?>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Settings</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Page Content here -->
          <form method="post" action="../functions/change_password.php?edit=<?php echo $_SESSION['userid'] ?>">
            <legend>Change Password:</legend>
              <div class="form-group">
                  <label for="password">New Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <!-- <div form-group>
                  <label for="confirm_password">Confirm New Password</label>
                  <input type="password" name="confirm_password" id="confirm_password" name="confirm_password" class="form-control">
              </div> -->
              <button class="btn btn-success" style="margin: 5px 0;" type="submit">Change</button>
          </form>
          <hr>
            <?php
                if($_SESSION['usertype'] == 'Vendor' && $_SESSION['status'] !== 'Exclusive'){
            ?>
          <form action="../functions/subscribe.php" method="POST">
            <legend>Upgrade Account</legend>
            <div class="form-group">
              <label for="">Upgrade to our Exclusive vendor account and get visitors contact you directly for only a one time payment of NGN 10,000</label>
            </div>
            <div class="form-group">
              <label for="">Billing Email</label>
              <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" readonly>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
          <?php
                
                    }else{
          ?>
          <h3>Exclusive Vendor<h3>
              <?php
                    }
              ?>

          
      </div>
    </div>  
    

<?php

include('footer.php');

?>