<?php

$page_title = "Renting";
include('header.php');

?>

<main class="main-content">
				
				<div class="page">
					<div class="container">
						<h2 class="entry-title">Need a place?</h2>
						<p>We have everything you need tailored to your taste</p>

						<div class="filter-links filterable-nav">
						<select class="mobile-filter">
								<option value="*">Show all</option>
								<?php
								$sql1 = "SELECT property_type FROM properties WHERE transaction_state = 'rent'";
								$result1 = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result1) > 0) {
									while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
								?>
								<option value="<?php echo ".".$row['property_type']; ?>"><?php echo $row['property_type']; ?></option>
								<!-- <option value=".shopping-center">shopping-center</option>
								<option value=".apartment">apartment</option> -->
								<?php
									}
								}
								?>
							</select>
							
							<?php
								$sql = "SELECT property_type FROM properties WHERE transaction_state = 'rent'";
								$result2 = mysqli_query($connection, $sql);
								if (mysqli_num_rows($result2) > 0) {
									while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
								?>
								<a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter="<?php echo ".".$row["property_type"]; ?>"><?php echo $row['property_type']; ?></a>
							<?php
									}
								}
								?>
						</div>

						<div class="filterable-items">
						<?php
                        $query = "SELECT * from properties WHERE transaction_state = 'rent' ORDER BY id desc";
						$result = mysqli_query($connection, $query);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
							<div class="project-item filterable-item <?php echo $row["property_type"]; ?>">
								<figure class="featured-image">
									<a href="project-single.html"><img src="img/property/<?php echo $row["fimage"]; ?>" alt="#"></a>
									<figcaption>
										<h2 class="project-title"><a href="project-single.html"><?php echo $row["title"]; ?></a></h2>
										<p class="project-subtotle"><?php echo $row["price"]; ?></p>
										<p><?php echo $row["location"]; ?></p>
										<a href="single.php?view=<?php echo $row["id"]; ?>" class="more-link"><img src="images/arrow.png" alt=""></a>
									</figcaption>
								</figure>
							</div>
							<?php
							}
						}
								?>
						</div>
					</div>
				</div> <!-- .page -->

			</main> <!-- .main-content -->

<?php

include('footer.php');

?>