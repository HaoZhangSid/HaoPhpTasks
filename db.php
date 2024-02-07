 <?php
// $servername = "localhost";
// $username = "hao23000";     
// $password = "zF44hXJ3";     
// $dbname = "wp_hao23000"; 


$servername = 'php24-db-1'; // 或者 MySQL 服务器的 IP
$username = 'root';
$password = 'password';
$dbname = 'crud_app';
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>