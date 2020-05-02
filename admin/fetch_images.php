<?php

//fetch_images.php

include('../functions/connect.php');

$query = "SELECT images FROM properties where id = 1";

$result = mysqli_query($connection, $query);

$output = '<div class="row">';

if (mysqli_num_rows($result) > 0) {
//  $result = $statement->fetchAll();

 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $output .= '
  <div class="col-md-2" style="margin-bottom:16px;">
   <img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" class="img-thumbnail" />
  </div>
  ';
 }
}

$output .= '</div>';

echo $output;

?>