<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3: Advanced PHP Concepts - [Your Name]</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'header.php'; ?>

<form class="mb-3" method="post">
  <div class="mb-3">
    <label for="firstname" class="form-label">Firstname:</label>
    <input type="text" class="form-control" id="firstname" name="firstname" required>
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Lastname:</label>
    <input type="text" class="form-control" id="lastname" name="lastname" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    echo "<h3>Hello {$firstname} {$lastname}, You are welcome to my site.</h3>";
}
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.n.</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>John</td>
      <td>5</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Alice</td>
      <td>4</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Bob</td>
      <td>5</td>
    </tr>
  </tbody>
</table>
<?php
$str1 = "Hello";
$str2 = "World";
$fullStr = $str1 . " " . $str2;
echo "<p>The length of '{$fullStr}' is " . strlen($fullStr) . " characters.</p>";

$number1 = 298;
$number2 = 234;
$number3 = 46;
$sum = $number1 + $number2 + $number3;
echo "<p>The sum of the numbers is: $sum</p>";
?>
<?php
echo "<p>Your browser: " . htmlspecialchars($_SERVER['HTTP_USER_AGENT']) . "</p>";

$filename = basename(__FILE__);
$filemodtime = date("F d Y H:i:s.", filemtime($filename));
echo "<p>Last modified time of this page: " . $filemodtime . "</p>";
?>

<?php include 'footer.php'; ?>

</body>
</html>
