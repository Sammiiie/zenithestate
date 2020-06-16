<?php

$page_title = "Property";
include('header.php');
if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $update = true;
    $sql = "SELECT * FROM properties WHERE id='$id'";
    $user = mysqli_query($connection, $sql);
    
  
    // if($standard){
      if (count($user) == 1 ) {
        $n = mysqli_fetch_array($user, MYSQLI_ASSOC);
        $id = $n["id"];
        $cons = $n['cons'];
        $description = $n['description'];
        $email = $n['email'];
        $location = $n['location'];
        $phone = $n['phone'];
        $phone2 = $n['phone2'];
        $price = $n['price'];
        $property_state = $n['property_state'];
        $property_type = $n['property_type'];
        $pros = $n['pros'];
        $title = $n['title'];
        $urgency = $n['urgency'];
        $vendor = $n['vendor'];
        $featured = $n['fimage'];
        $transac = $n['transaction_state'];
        
      }else{
        echo "Something is wrong";
      } 
  }

?>

<main class="main-content">
				
				<div class="page">
					<div class="container">
                        <?php
                        if($transac == "rent"){
                        ?>
                        <a href="rent.php" class="button-back"><img src="images/arrow-back.png" alt="" class="icon">Back to the properties</a>
                        <?php
                        }else{
                        ?>
                        <a href="sell.php" class="button-back"><img src="images/arrow-back.png" alt="" class="icon">Back to the properties</a>
                        <?php
                        }
                        ?>

						<div class="row">
							<div class="col-md-5">
								<div class="project-images">
									<img src="img/property/<?php echo $featured ?>" alt="">

									<div class="thumbs">
                                        <?php
                                            $query = "SELECT * FROM images Where title = '$title'";
                                            $images = mysqli_query($connection, $query);
                                            if (mysqli_num_rows($images) > 0) {
                                                while($row = mysqli_fetch_array($images, MYSQLI_ASSOC)) {
                                        ?>
										<a href="#"><img src="img/property/<?php echo $row['image']; ?>" alt="#"></a>
										<!-- <a href="#"><img src="dummy/small-thumb-2.jpg" alt="#"></a>
                                        <a href="#"><img src="dummy/small-thumb-3.jpg" alt="#"></a> -->
                                        <?php
                                                }
                                            }
                                        ?>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="project-detail">
									<h2 class="project-title"><?php echo $title ?> - &#8358; <?php echo number_format($price, 2, ".", ","); ?>  || <i><?php echo $urgency ?></i></h2>
                  <?php 
                    $sql2 = "SELECT * FROM user WHERE id='$vendor'";
                    $excl = mysqli_query($connection, $sql2);
                    if (count($excl) == 1 ) {
                      $b = mysqli_fetch_array($excl, MYSQLI_ASSOC);
                      $stat = $b['status'];
                    }
                    if($stat == "Exclusive"){
                  ?>
                  Contact: <?php echo $vendor ?> - <a href="tel:+<?php echo $phone ?>"><?php echo $phone ?></a> || <a href="tel:+<?php echo $phone2 ?>"><?php echo $phone2 ?></a>
                  <?php } ?>
                                    <?php echo $description ?>
                                    <h4>Pros</h4>
                                    <?php echo $pros ?>
                                    <h4>Cons</h4>
                                    <?php echo $cons ?>
                                    <!-- AddToAny BEGIN -->
                                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <!-- <a class="a2a_dd" href="https://www.addtoany.com/share"></a> -->
                                    <a class="a2a_button_whatsapp"></a>
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_email"></a>
                                    <a class="a2a_button_pinterest"></a>
                                    <a class="a2a_button_linkedin"></a>
                                    <a class="a2a_button_telegram"></a>
                                    </div>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                    <!-- AddToAny END -->
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .page -->

			</main> <!-- .main-content -->

<?php

include('footer.php');

?>