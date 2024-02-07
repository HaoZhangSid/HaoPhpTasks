<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>
    <?php echo $title; ?>
  </title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    a,
    .nav-link,
    .navbar-brand {
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">HaoZhang</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./ex1.php">Exercise1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ex2.php">Exercise2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ex3.php">Exercise3</a>
              </li>
              <!-- Add additional exercises as needed -->
              <li class="nav-item">
                <a class="nav-link" href="./ex4.php">Exercise4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ex5.php">Exercise5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ex6.php">Exercise6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ex7.php">Exercise7</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
      <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
        <h3>List of Exercises</h3>
        <?php
        $currentPath = basename($_SERVER['PHP_SELF']);

        if ($currentPath == "ex7.php"|| $currentPath == "read.php"|| $currentPath == "updatesingle.php") {
          // 如果当前是在ex7.php，显示这个<ul>组件
          ?>
          <ul>
            <li><a href="./ex7.php" style="color: black;">Create Data</a></li>
            <li><a href="./read.php" style="color: black;">Read Data</a></li>
            <!-- 其他特殊链接 -->
          </ul>
          <?php
        } else {
          // 否则，显示通用的<ul>组件
          ?>
          <ul>
            <li><a href="./ex1.php" style="color: black;">Exercise1</a></li>
            <li><a href="./ex2.php" style="color: black;">Exercise2</a></li>
            <li><a href="./ex3.php" style="color: black;">Exercise3</a></li>
            <li><a href="./ex4.php" style="color: black;">Exercise4</a></li>
            <li><a href="./ex5.php" style="color: black;">Exercise5</a></li>
            <li><a href="./ex6.php" style="color: black;">Exercise6</a></li>
            <li><a href="./ex7.php" style="color: black;">Exercise7</a></li>
          </ul>
          <?php
        }
        ?>
      </div>

      <div class="col-sm-9">