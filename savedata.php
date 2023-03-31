<?php 

echo $stu_name = $_POST['s_name'];
echo $stu_address = $_POST['s_address'];
echo $stu_phone = $_POST['s_phone'];
echo $stu_class = $_POST['s_class'];



$conn = mysqli_connect("localhost", "root","","crud") or die("Connection Unsuccessful!");
    $sql = "INSERT INTO student(s_name,s_address,s_class,s_phone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
   $result = mysqli_query($conn, $sql) or die("Query Unsuccesessful");

   header("Location: http://localhost/crud/index.php");

   mysqli_close($conn);

?>