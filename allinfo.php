<?php

$page_title = "Things you need to know";
include('header.php');

?>

<main class="main-content">
				
				<div class="page">
					<div class="container">
						<h2 class="section-title">All posts</h2>
						<ul class="news-list">
						<?php
                        $query = "SELECT * from info ORDER BY id DESC";
						$result = mysqli_query($connection, $query);
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
							<li>
								<figure><img src="img/post/<?php echo $row["images"]; ?>" alt=""></figure>
								<h3 class="entry-title"><a href="post.php?view=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a></h3>
								<!-- <div class="date">30.09.2014</div> -->
								<p><?php echo $row["preview"]; ?></p>
							</li>
							<?php
							}
						}
								?>
						</ul>
						<!-- <hr class="separator padding"> -->
						
						
						
						<!-- <a href="#" class="button">Show Older News</a> -->
					</div>
				</div> <!-- .page -->

			</main> <!-- .main-content -->

<?php

include('footer.php');

?>