<?php

$page_title = "Home";
include('header.php');

?>

<div class="hero hero-slider">
				<ul class="slides">
				<?php
                        $query = "SELECT simage, title, preview from info ORDER BY id desc limit 3";
						$result = mysqli_query($connection, $query);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
					<li data-bg-image="img/slider/<?php echo $row["simage"]; ?>">
						<div class="container">
							<div class="slide-title">
								<span><?php echo $row["title"]; ?></span> <br>
								<span><?php echo $row["preview"]; ?></span>
							</div>
						</div>
					</li>
					<?php
							}
						}
								?>
					<!-- <li data-bg-image="dummy/slide-2.jpg">
						<div class="container">
							<div class="slide-title">
								<span>blanditiis deleniti</span> <br>
								<span>ducimus deleniti atque</span>
							</div>
						</div>
					</li>
					<li data-bg-image="dummy/slide-3.jpg">
						<div class="container">
							<div class="slide-title">
								<span>blanditiis deleniti</span> <br>
								<span>ducimus deleniti atque</span>
							</div>
						</div>
					</li> -->
				</ul> <!-- .slides -->
            </div> <!-- .hero-slider -->
            
            <main class="main-content">
				<div class="fullwidth-block latest-projects-section">
					<div class="container">
						<h2 class="section-title">Latest properties</h2>
						<div class="row">
						<?php
								$sql1 = "SELECT * FROM properties ORDER BY id desc LIMIT 4";
								$result1 = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result1) > 0) {
									while($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
								?>
							<div class="col-sm-6 col-md-3">
								<div class="project">
									<figure class="project-thumbnail"><img src="img/property/<?php echo $row["fimage"]; ?>" alt="Project 1"></figure>
									<h3 class="project-title"><a href="single.php?view=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a></h3>
									<small class="project-subtitle">&#8358; <?php echo number_format($row["price"], 2, ".", ","); ?></small>
									<?php echo substr($row["description"], 0, 40); ?>
									<a href="single.php?view=<?php echo $row["id"]; ?>" class="more-link"><img src="images/arrow.png" alt=""></a>
								</div>
							</div>
							<?php
									}
								}
							?>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block.latest-projects-section -->

				<div class="fullwidth-block image-block" data-bg-image="dummy/section-img.jpg"></div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
						<?php
                        $query = "SELECT * from info";
						$result = mysqli_query($connection, $query);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
							<div class="col-md-4">
								
								<h3 class="section-title"><?php echo $row["title"]; ?></h3>
								<p><?php echo $row["preview"]; ?></p>
								<a href="post.php?view=<?php echo $row["id"]; ?>" class="button">Read more</a>
								
							</div>
							<?php
							}
						}
								?>
						</div>
								
						<hr class="separator">

						<div class="row">
							<div class="col-md-6">
								<h2 class="section-title">Testimonials</h2>
								<div class="testimonial-slider">
									<ul class="slides">
										<li>
											<blockquote>
												<p>They went out of their way to deliver a property I truly apprecaite and that makes me happy</p>
												<cite>Jacob</cite>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>They are good.</p>
												<cite>Chizoba</cite>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>I was able to sell my car</p>
												<cite>Franca</cite>
											</blockquote>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<h2 class="section-title">Latest News</h2>
								<ul class="news">
									<?php
									$query = "SELECT * from info ORDER BY id DESC LIMIT 2";
									$result = mysqli_query($connection, $query);
									if (mysqli_num_rows($result) > 0) {
										while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									?>
									<li>
										<div class="date"><?php echo $row["date_created"]; ?></div>
										<h3 class="entry-title"><a href="post.php?view=<?php echo $row["id"]; ?>"><?php echo substr($row["post"], 0, 100); ?>...</a></h3>
									</li>
									<?php
										}
									}
									?>
								</ul>
							</div>
						</div> <!-- .row -->
						
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->
			</main> <!-- .main-content -->

<?php

include('footer.php');

?>