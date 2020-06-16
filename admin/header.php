<?php

session_start();

if (!$_SESSION["loggedin"] == true) {
    header("location: login.php");
    exit;
}
include("../functions/connect.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Zenestate - <?php echo $page_title ?></title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Autocomplete -->
  <!-- <script src="autocomplete.js"></script> -->
  <!-- <link href="autocomplete.css" rel="stylesheet"> -->
  <!-- <script>
    window.addEventListener("load", function(){
      	suggest.attach({
        target : "inputA",
        url : "autosearch.php",
        delay : 200,
        min : 1
      	});
      	suggest.attach({
        target : "inputB",
        url : "autosearch.php"
        
     	 });
    	});
  </script> -->
  <style>
  /* custom css */
  .ac_results {
	padding: 0px;
	border: 1px solid #84a10b;
	background-color: #84a10b;
	overflow: hidden;
	}

	.ac_results ul {
		width: 100%;
		list-style-position: outside;
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.ac_results li {
		margin: 0px;
		padding: 2px 5px;
		cursor: default;
		display: block;
		color: #fff;
		font-family:verdana;
		/* 
		if width will be 100% horizontal scrollbar will apear 
		when scroll mode will be used
		*/
		/*width: 100%;*/
		font-size: 12px;
		/* 
		it is very important, if line-height not setted or setted 
		in relative units scroll will be broken in firefox
		*/
		line-height: 16px;
		overflow: hidden;

	}

	.ac_loading {
		background: white url('../images/indicator.gif') right center no-repeat;
	}

	.ac_odd {
		background-color: #84a10b;
		color: #ffffff;
	}

	.ac_over {
		background-color: #5a6b13;
		color: #ffffff;
	}
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Zenestate</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <?php
        
        if($_SESSION['usertype'] == "Vendor"){
        }else{

        ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Public Info">
          <a class="nav-link" href="info.php">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span class="nav-link-text">Info</span>
          </a>
        </li>
        <?php
        }
        ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Properties">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-money"></i>
            <span class="nav-link-text">Property</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="manage_properties.php">Create</a>
            </li>
            <li>
              <a href="properties.php">Properties</a>
            </li>
          </ul>
        </li>
        <?php
        
        if($_SESSION['usertype'] == "Admin"){

        ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Users">
          <a class="nav-link" href="manage_users.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Request Made">
          <a class="nav-link" href="request.php">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="nav-link-text">Request</span>
          </a>
        </li>
        <?php
        }
        ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Your Settings">
          <a class="nav-link" href="settings.php">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Settings</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li> -->
        <li class="nav-item">
          <a href="#" class="nav-link" style="text-transform:uppercase">
            <i class="fa fa-person"></i><?php echo $_SESSION['username']; ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>