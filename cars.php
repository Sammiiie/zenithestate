<?php

$page_title = "Sales";
include('header.php');


// $sql = "SELECT property_type FROM properties";
//     $user = mysqli_query($connection, $sql);
    
  
//     // if($standard){
//       if (count($user) == 1 ) {
//         $n = mysqli_fetch_array($user, MYSQLI_ASSOC);
//         $prop = $n["property_type"];
//       }else{
//         echo "Something is wrong";
//       }

?>

<main class="main-content">
				
				<div class="page">
					<div class="container">
						<h2 class="entry-title">Buy Buy Buy</h2>
						<p>Buy your dream house or business area we got it all for you</p>

						<div class="filter-links filterable-nav">
							<select class="mobile-filter">
								<option value="*">Show all</option>
								<?php
								$sql1 = "SELECT DISTINCT transaction_state FROM properties WHERE property_type = 'car'";
								$result1 = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result1) > 0) {
									while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
								?>
								<option value="<?php echo ".".$row['transaction_state']; ?>"><?php echo $row['transaction_state']; ?></option>
								<!-- <option value=".shopping-center">shopping-center</option>
								<option value=".apartment">apartment</option> -->
								<?php
									}
								}
								?>
							</select>
							<a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
							<?php
								$sql = "SELECT DISTINCT transaction_state FROM properties WHERE property_type = 'car'";
								$result2 = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result2) > 0) {
									while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
								?>
								
								<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter="<?php echo ".".$row["transaction_state"]; ?>"><?php echo $row['property_type']; ?></a>
							<?php
									}
								}
								?>
							<!-- <a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".shopping-center">shopping-center</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".apartment">apartment</a> -->
						</div>

						<div class="filterable-items">
						<?php
                        $query = "SELECT * from properties WHERE property_type = 'car' ORDER BY id desc";
						$result = mysqli_query($connection, $query);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
							<div class="project-item filterable-item <?php echo $row["transaction_state"]; ?>">
								<figure class="featured-image">
									<a href="single.php?view=<?php echo $row["id"]; ?>"><img src="img/property/<?php echo $row["fimage"]; ?>" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="single.php?view=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a></h2>
										<p class="project-subtotle">&#8358; <?php echo number_format($row["price"], 2, ".", ","); ?></p>
										<p><?php echo $row["location"]; ?></p>
										<a href="single.php?view=<?php echo $row["id"]; ?>" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<?php
							}
						}
								?>
							<!-- <div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="dummy/large-thumb-2.jpg" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Consectetur adipisicing elit</a></h2>
										<p class="project-subtotle">Maecenas dictum suscipit</p>
										<p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscraper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="dummy/large-thumb-3.jpg" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Repellat fugit tenetur</a></h2> 
										<p class="project-subtotle">Maecenas dictum suscipit</p>
										<p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item apartment">
								<figure class="featured-image">
									<a href="project-single.html"><img src="dummy/large-thumb-4.jpg" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Asperiores quas voluptatem</a></h2>
										<p class="project-subtotle">Maecenas dictum suscipit</p>
										<p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="dummy/large-thumb-5.jpg" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Ex quos ab perspiciatis</a></h2>
										<p class="project-subtotle">Maecenas dictum suscipit</p>
										<p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="dummy/large-thumb-6.jpg" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Natus dolores ad et ipsam</a></h2>
										<p class="project-subtotle">Maecenas dictum suscipit</p>
										<p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item shopping-center">
								<figure class="featured-image">
									<a href="project-single.html"><img src="dummy/large-thumb-7.jpg" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Hic nisi. Animi placeat</a></h2>
										<p class="project-subtotle">Maecenas dictum suscipit</p>
										<p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="dummy/large-thumb-8.jpg" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">Obcaecati quam</a></h2>
										<p class="project-subtotle">Maecenas dictum suscipit</p>
										<p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<div class="project-item filterable-item skyscrapper">
								<figure class="featured-image">
									<a href="project-single.html"><img src="dummy/large-thumb-9.jpg" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html">quam exercitationem</a></h2>
										<p class="project-subtotle">Maecenas dictum suscipit</p>
										<p>Sed ut perspiciatis unde omnis iste natus accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
										<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div> -->
						</div>
					</div>
				</div> <!-- .page -->

			</main> <!-- .main-content -->

<?php

include('footer.php');

?>