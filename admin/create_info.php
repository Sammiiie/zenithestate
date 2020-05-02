<?php

$page_title = "Create Post";
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
        <li class="breadcrumb-item active">Create new Info</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Insert content here -->
          <div class="card card-register mx-auto mb-5">
            <div class="card-header">New Public Post</div>
            <div class="card-body">
                <form action="../functions/create_post.php" method="POST" enctype='multipart/form-data'>
                    <!-- Professional details -->
                    <!-- <hr> -->
                    <fieldset>
                        <!-- <legend>Author:</legend> -->
                        <div class="form-group">
                            <label for="">Author:</label>
                            <input type="text" name="author" id="" class="form-control" value="<?php echo $_SESSION["name"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Title:</label>
                            <input type="text" name="title" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Post preview:</label>
                            <input type="text" name="pview" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Post:</label>
                            <textarea name="post" class="form-control" id="" cols="30" rows="10"></textarea>
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