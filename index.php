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
							<div class="col-sm-6 col-md-3">
								<div class="project">
									<figure class="project-thumbnail"><img src="dummy/thumb-1.jpg" alt="Project 1"></figure>
									<h3 class="project-title"><a href="#">elit eiusmod tempor</a></h3>
									<small class="project-subtitle">irure dolor voluptate</small>
									<p>Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit fugit consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
									<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="project">
									<figure class="project-thumbnail"><img src="dummy/thumb-2.jpg" alt="Project 2"></figure>
									<h3 class="project-title"><a href="#">elit eiusmod tempor</a></h3>
									<small class="project-subtitle">irure dolor voluptate</small>
									<p>Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit fugit consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
									<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="project">
									<figure class="project-thumbnail"><img src="dummy/thumb-3.jpg" alt="Project 3"></figure>
									<h3 class="project-title"><a href="#">elit eiusmod tempor</a></h3>
									<small class="project-subtitle">irure dolor voluptate</small>
									<p>Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit fugit consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
									<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="project">
									<figure class="project-thumbnail"><img src="dummy/thumb-4.jpg" alt="Project 4"></figure>
									<h3 class="project-title"><a href="#">elit eiusmod tempor</a></h3>
									<small class="project-subtitle">irure dolor voluptate</small>
									<p>Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit fugit consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
									<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block.latest-projects-section -->

				<div class="fullwidth-block image-block" data-bg-image="dummy/section-img.png"></div>

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
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, dolorum nostrum suscipit. Sunt tenetur accusantium eligendi illo perferendis. Commodi iste nihil eius, doloremque aperiam iure repellat sequi enim sint similique!</p>
												<cite>Jessica Waton</cite>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>Ut ullam sed accusamus aliquam rerum tempora ab voluptatibus, nostrum vitae nesciunt quam atque! Tempora dolorem quas pariatur debitis nulla, molestiae, obcaecati voluptatibus quisquam, facilis quis sint eos, corporis assumenda.</p>
												<cite>Jessica Waton</cite>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>Fuga provident modi illo dolorum, neque labore natus ratione, totam id sequi vero repudiandae velit nemo nobis corporis tenetur. Magnam velit est cumque incidunt unde delectus labore inventore eaque vitae?</p>
												<cite>Jessica Waton</cite>
											</blockquote>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<h2 class="section-title">Latest News</h2>
								<ul class="news">
									<li>
										<div class="date">30.09.2014</div>
										<h3 class="entry-title"><a href="#">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</a></h3>
									</li>
									<li>
										<div class="date">30.09.2014</div>
										<h3 class="entry-title"><a href="#">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur...</a></h3>
									</li>
								</ul>
							</div>
						</div> <!-- .row -->
						
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->
			</main> <!-- .main-content -->

<?php

include('footer.php');

?>