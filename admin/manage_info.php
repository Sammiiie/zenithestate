<?php

$page_title = "Edit Info";
include("header.php");
// include("connect.php");s

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $sql = "SELECT * FROM info WHERE id='$id'";
    $user = mysqli_query($connection, $sql);
    
  
    // if($standard){
      if (count($user) == 1 ) {
        $n = mysqli_fetch_array($user, MYSQLI_ASSOC);
        $id = $n["id"];
        $name = $n['author'];
        $preview = $n['preview'];
        $title = $n['title'];
        $post = $n['post'];
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
          <a href="info.php">Info</a>
        </li>
        <li class="breadcrumb-item active">Create new Info</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Insert content here -->
          <div class="card card-register mx-auto mb-5">
            <div class="card-header">New Public Post</div>
            <div class="card-body">
                <form action="../functions/update_info.php?sn=<?php echo $id; ?>" method="POST" enctype='multipart/form-data'>
                    <!-- Professional details -->
                    <!-- <hr> -->
                    <fieldset>
                        <!-- <legend>Author:</legend> -->
                        <div class="form-group">
                            <label for="">Author:</label>
                            <input type="text" name="author" id="" class="form-control" value="<?php echo $name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Title:</label>
                            <input type="text" name="title" id="" class="form-control" value="<?php echo $title; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Post preview:</label>
                            <input type="text" name="preview" id="" class="form-control" value="<?php echo $preview; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Post:</label>
                            <textarea name="post" class="form-control" id="" cols="30" rows="10"><?php echo $post; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Slider Image:</label>
                            <input type="file" name="simage" id="" class="form-control" accept=".jpg, .png .gif">
                            <span>Please ensure image is 1920*684</span>
                        </div>
                        <div class="form-group">
                            <label for="">Post Image:</label>
                            <input type="file" name="pimage" id="" class="form-control" accept=".jpg, .png .gif">
                            <span>Please ensure image is 470*470</span>
                        </div>
                    </fieldset>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
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