<?php

$page_title = "Create Property";
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
        <li class="breadcrumb-item active">Create new Property</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <!-- Insert content here -->
          <div class="card card-register mx-auto mb-5">
            <div class="card-header">Full Profile</div>
            <div class="card-body">
                <span id="success_message"></span>
                <form action="../functions/create_property.php" method="post" id="form" enctype='multipart/form-data'>
                    <!-- Bio -->
                    <fieldset>
                        <legend>Personal Details:</legend>
                        <?php
                            if($_SESSION['usertype'] == "Vendor"){
                        ?>
                        <div class="form-group">
                            <label for="">Vendor:</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $_SESSION["name"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <!-- phone 1 -->
                                <div class="col-md-6">
                                    <label for="">Phone:</label>
                                    <input type="tel" name="phone" value="<?php echo $_SESSION["phone"] ?>" id="" class="form-control">
                                </div>
                                <!-- phone 2 -->
                                <div class="col-md-6">
                                    <label for="">Phone 2:</label>
                                    <input type="tel" name="phone2" id="" class="form-control" placeholder="Optional">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="<?php echo $_SESSION["email"] ?>" id="" class="form-control">
                        </div>
                        <?php
                            }else{
                        ?>
                        <div class="form-group">
                            <label for="">Vendor:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <!-- phone 1 -->
                                <div class="col-md-6">
                                    <label for="">Phone:</label>
                                    <input type="tel" name="phone" id="" class="form-control">
                                </div>
                                <!-- phone 2 -->
                                <div class="col-md-6">
                                    <label for="">Phone 2:</label>
                                    <input type="tel" name="phone2" id="" placeholder="Optional" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="email" name="email" id="" class="form-control">
                        </div>
                        <?php
                            }
                        ?>
                    </fieldset>
                    <!-- /Bio -->
                    <!-- Professional details -->
                    <hr>
                    <fieldset>
                        <legend>Property details:</legend>
                        <div class="form-group">
                            <label for="">Title:</label>
                            <input type="text" name="title" id="title" class="form-control">
                            <span id="title_error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Transaction:</label>
                            <select name="stype" id="" class="form-control">
                                <option value="sell">Sale</option>
                                <option value="rent">Rent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Type:</label>
                            <select name="ptype" id="" class="form-control">
                                <option value="car">Cars</option>
                                <option value="bungalow">Bungalow</option>
                                <option value="Flat">Flat</option>
                                <option value="Semi-detached duplex">Semi-detached duplex</option>
                                <option value="duplex">Duplex</option>
                                <option value="Mansion">Mansion</option>
                                <option value="Land">Land</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Price (NGN):</label>
                            <input type="number" name="price" id="price" class="form-control">
                            <span id="price_error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Location:</label>
                            <input type="text" name="location" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description:</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Urgency</label>
                            <select name="urgency" id="" class="form-control">
                                <option value="Normal">Normal</option>
                                <option value="Urgent">Urgent</option>
                                <option value="Distress">Distress</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Featured Image:</label>
                            <input type="file" name="fimage" id="" class="form-control" accept=".jpg, .png, .gif">
                            <span>Please ensure image is 470*470</span>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="">Other Images:</label>
                                    <input type="file" name="images[]" id="image" class="form-control" multiple accept=".jpg, .png, .gif">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Pros:</label>
                                    <textarea name="pros" id="" placeholder="Selling point" cols="30" rows="4"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Cons:</label>
                                    <textarea name="cons" id="" placeholder="Possible factors customer may find displeasing" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="process" style="display:none;">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" id="save" name="save" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>
          <!-- Content ends here -->
        </div>
      </div>
</div>
<!-- Content window ends here -->

<script>
 
 $(document).ready(function(){
  
  $('#form').on('submit', function(event){
   event.preventDefault();
   var count_error = 0;

   if($('#title').val() == '')
   {
    $('#title_error').text('First Name is required');
    count_error++;
   }
   else
   {
    $('#title_name_error').text('');
   }

   if($('#price').val() == '')
   {
    $('#price_error').text('Last Name is required');
    count_error++;
   }
   else
   {
    $('#price_error').text('');
   }

   if(count_error == 0)
   {
    $.ajax({
     url:"../functions/create_property.php",
     method:"POST",
     data:$(this).serialize(),
     beforeSend:function()
     {
      $('#save').attr('disabled', 'disabled');
      $('#process').css('display', 'block');
     },
     success:function(data)
     {
      var percentage = 0;

      var timer = setInterval(function(){
       percentage = percentage + 20;
       progress_bar_process(percentage, timer);
      }, 1000);
     }
    })
   }
   else
   {
    return false;
   }
  });

  function progress_bar_process(percentage, timer)
  {
   $('.progress-bar').css('width', percentage + '%');
   if(percentage > 100)
   {
    clearInterval(timer);
    $('#form')[0].reset();
    $('#process').css('display', 'none');
    $('.progress-bar').css('width', '0%');
    $('#save').attr('disabled', false);
    $('#success_message').html("<div class='alert alert-success'>Property Saved</div>");
    setTimeout(function(){
     $('#success_message').html('');
    }, 5000);
   }
  }

 });
</script>

<?php

include("footer.php");

?>