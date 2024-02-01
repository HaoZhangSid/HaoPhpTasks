<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4: Control Flow and Loops - Hao Zhang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2>Check Voting Eligibility</h2>
    <form method="post" class="mb-3">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <button type="submit" class="btn btn-primary">Check Eligibility</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "<div class='alert alert-success'>Hello $name, You are eligible for voting.</div>";
        } else {
            echo "<div class='alert alert-danger'>Hello $name, You are not eligible for voting.</div>";
        }
    }
    ?>

    <h2>Month Check</h2>
    <?php
    $month = date("F");

    switch ($month) {
        case "August":
            echo "<p>It's August, so it's still holiday.</p>";
            break;
        default:
            echo "<p>Not August, this is $month so I don't have any holidays</p>";
    }
    ?>

    <h2>Multiplication Table</h2>
    <form method="post" class="mb-3">
        <div class="mb-3">
            <label for="number" class="form-label">Number for multiplication table:</label>
            <input type="number" class="form-control" id="number" name="number" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Table</button>
    </form>
    <?php
    if (isset($_POST['number'])) {
        $n = $_POST['number'];
        echo "<p>Multiplication table for $n:</p><ul>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$n x $i = " . ($n * $i) . "</li>";
        }
        echo "</ul>";
    }
    ?>

    <h2>Print Numbers</h2>
    <form method="post" class="mb-3">
        <div class="mb-3">
            <label for="upto" class="form-label">Print numbers up to:</label>
            <input type="number" class="form-control" id="upto" name="upto" required>
        </div>
        <button type="submit" class="btn btn-primary">Print Numbers</button>
    </form>
    <?php
    if (isset($_POST['upto'])) {
        $n = $_POST['upto'];
        echo "<p>Numbers from 1 to $n:</p>";
        for ($i = 1; $i <= $n; $i++) {
            echo $i . " ";
        }
    }
    ?>

    <h2>Array Elements</h2>
    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");
    echo "<p>Array elements are:</p>";
    foreach ($myarray as $element) {
        echo $element . " ";
    }
    ?>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
