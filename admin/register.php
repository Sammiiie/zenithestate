<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Zenestate</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Create an Account</div>
      <div class="card-body">
        <form action="../functions/manage_users_data.php" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Full name</label>
                <input class="form-control" id="" name="name" type="text" aria-describedby="nameHelp" placeholder="Enter full name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Username</label>
                <input class="form-control" id="" name="username" type="text" aria-describedby="nameHelp" placeholder="Enter username">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="">Phone</label>
                <input class="form-control" id="" name="phone" type="tel" aria-describedby="nameHelp" placeholder="07000000021">
              </div>
              <div class="col-md-6">
                <label for="">Phone2</label>
                <input class="form-control" id="" name="phone2" type="tel" aria-describedby="nameHelp" placeholder="090932300407">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputEmail1">Email address</label>
                <input class="form-control" id="" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" required>
              </div>
              <div class="col-md-6">
                <label for="">User-Type</label>
                <input class="form-control" id="" name="user_type" type="text" aria-describedby="nameHelp" value="Vendor" readonly>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input class="form-control" id="" name="address" type="text" aria-describedby="emailHelp" placeholder="Enter Contact address">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Sex</label>
                <select name="sex" id="" class="form-control">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Password</label>
                <input class="form-control" id="exampleConfirmPassword" name="password" type="password" placeholder="Password" required>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
