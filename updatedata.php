<?php 
$stu_id = $_POST['s_id'];
$stu_name = $_POST['s_name'];
$stu_address = $_POST['s_address'];
$stu_phone = $_POST['s_phone'];
$stu_class = $_POST['s_class'];

$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Unsuccessful!");
$sql = "UPDATE student SET s_name = '{$stu_name}', s_address = '{$stu_address }', s_class = '{$stu_class}', s_phone ='{$stu_phone}' WHERE s_id = '{$stu_id}'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

mysqli_close($conn);

header("Location: http://localhost/crud/index.php?status=success");
exit();
?>
