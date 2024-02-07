<?php
ob_start(); // 开始缓冲输出
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $fname = $_POST['fname'];     // First name
    $lname = $_POST['lname'];     // Last name
    $city = $_POST['city'];       // City
    $groupid = $_POST['groupid']; // Group ID

    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO studentsinfo (first_name, last_name, city, groupid)
            VALUES ('$fname', '$lname', '$city', '$groupid')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        // echo "Record Deleted with id: $idToDelete<br>";
        header("Location: read.php");
        exit; // 防止脚本继续执行
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
ob_end_flush(); // 发送输出缓冲区的内容并关闭缓冲
?>