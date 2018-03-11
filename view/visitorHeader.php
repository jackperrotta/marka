<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $base_path;?>/img/marka-logo.png">

    <title>Welcome to Marka</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $base_path;?>/styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="<?php echo $base_path;?>/styles/main.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo $base_path;?>">
      <img src="<?php echo $base_path;?>/img/marka-logo.png" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto ml-3">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_path;?>/visitors/index.php"><?php echo $fName ?>'s Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_path;?>/visitors/index.php?status=purchase">Purchase Pass</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_path;?>/visitors/index.php?status=group">My Group</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_path;?>/visitors/index.php?status=beach">My Beach</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_path;?>/visitors/index.php?status=logout">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
