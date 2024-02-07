<?php
ob_start(); // 开始缓冲输出
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<?php 
/* 
The isset() function is used to check if a variable is set and not NULL.
 In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['submit'])) {
    // 从表单获取数据
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];       // 获取城市
    $groupid = $_POST['groupid']; // 获取小组ID

    // 使用预处理语句创建SQL查询
    $sql = "UPDATE studentsinfo SET first_name=?, last_name=?, city=?, groupid=? WHERE id=?";

    // 准备SQL语句
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing the SQL statement: " . $conn->error);
    }

    // 绑定参数
    $stmt->bind_param("ssssi", $fname, $lname, $city, $groupid, $a);

    // 执行查询
    if ($stmt->execute()) {
        // echo "Your information is updated Successfully";
        header("Location: read.php");
        exit; // 防止脚本继续执行
    } else {
        echo "Error: " . $stmt->error;
    }

    // 关闭语句
    $stmt->close();
}

if (isset($_POST['delete'])) {
    // 获取要删除的记录的ID
    $idToDelete = $a; // 假设 $a 已经包含了要删除的记录的ID

    // 创建预处理语句
    $sql = "DELETE FROM studentsinfo WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing the SQL statement: " . $conn->error);
    }

    // 绑定参数
    $stmt->bind_param("i", $idToDelete);

    // 执行查询
    if ($stmt->execute()) {
        // echo "Record Deleted with id: $idToDelete<br>";
        header("Location: read.php");
        exit; // 防止脚本继续执行
    } else {
        echo "Error: " . $stmt->error;
    }
    // 关闭语句
    $stmt->close();
}


$conn->close();
include 'header.php';
ob_end_flush(); // 发送输出缓冲区的内容并关闭缓冲
?>
<h2> Update your information below: </h2>
<form name= "form1" method="post" action="">
  <div class="row">
    <div class="col">
        <label for="fname">First Name:</label>
      <input type="text" class="form-control" placeholder="First name" name="fname" required value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="col">
        <label for="lname">Last Name:</label>
      <input type="text" class="form-control" placeholder="Last name" name="lname" required value="<?php echo $row['last_name']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <label for="city">City:</label>
      <input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['city']; ?>">
    </div>

    <div class="col">
    <label for="groupid">Group ID:</label>
    <select class="form-control" id="groupid" name="groupid">
        <option value="BBCAP19" <?php echo $row['groupId'] == 'BBCAP19' ? 'selected' : ''; ?>>BBCAP19</option>
        <option value="BBCAP20" <?php echo $row['groupId'] == 'BBCAP20' ? 'selected' : ''; ?>>BBCAP20</option>
        <option value="BBCAP21" <?php echo $row['groupId'] == 'BBCAP21' ? 'selected' : ''; ?>>BBCAP21</option>
        <option value="BBCAP22" <?php echo $row['groupId'] == 'BBCAP22' ? 'selected' : ''; ?>>BBCAP22</option>
        <option value="Others" <?php echo $row['groupId'] == 'Others' ? 'selected' : ''; ?>>Others</option>
    </select>
</div>

  </div>
<br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
  <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
</div>
</form>



<?php include 'footer.php'; ?>
