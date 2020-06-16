<?php

$page_title = "Info";
include('header.php');

if (isset($_GET['view'])) {
    $id = $_GET['view'];
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
		$img = $n['images'];
      }else{
        echo "Something is wrong";
      } 
  }

?>

<main class="main-content">
				
				<div class="page">
					<div class="container">
						<a href="info.php" class="button-back"><img src="images/arrow-back.png" alt="" class="icon">Back to the info</a>

						<div class="row">
							<div class="col-md-5">
								<div class="project-images">
									<img src="img/post/<?php echo $img ?>" alt="">

									<!-- <div class="thumbs">
										<a href="#"><img src="dummy/small-thumb-1.jpg" alt="#"></a>
										<a href="#"><img src="dummy/small-thumb-2.jpg" alt="#"></a>
										<a href="#"><img src="dummy/small-thumb-3.jpg" alt="#"></a>
									</div> -->
								</div>
							</div>
							<div class="col-md-7">
								<div class="project-detail">
									<h2 class="project-title"><?php echo $title; ?></h2>
									<p><?php echo $post; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .page -->

			</main> <!-- .main-content -->


<?php

include('footer.php');

?>