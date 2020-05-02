<?php

$page_title= "View Request";


include("header.php");
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $sql = "SELECT * FROM requests WHERE id='$id'";
    $user = mysqli_query($connection, $sql);
    
  
    // if($standard){
      if (count($user) == 1 ) {
        $n = mysqli_fetch_array($user, MYSQLI_ASSOC);
        $id = $n["id"];
        $name = $n['name'];
        $property = $n['property'];
        $email = $n['email'];
        $phone = $n['phone'];
        $message = $n['message'];
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
        <li class="breadcrumb-item"><a href="request.php">Request</a></li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Insert content here -->
          
            <div class="card card-register mx-auto mb-5">
                <div class="card-header">Request From - <?php echo $name ?></div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Property:</label>
                            <input type="text" name="" id="" class="form-control" value="<?php echo $property ?>" readonly>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="">Email:</label>
                                    <input type="text" name="" id="" class="form-control" value="<?php echo $email ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Phone:</label>
                                    <input type="text" name="" id="" class="form-control" value="<?php echo $phone ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Message:</label>
                            <textarea name="" class="form-control" readonly placeholder="<?php echo $message ?>" id="" cols="30" rows="10"></textarea>
                        </div>
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