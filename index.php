<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php 
    $conn = mysqli_connect("localhost", "root","","crud") or die("Connection Unsuccessful!");
    $sql = "SELECT * FROM student JOIN class WHERE student.s_class = class.c_id";
   $result = mysqli_query($conn, $sql) or die("Query Unsuccesessful");


   if(mysqli_num_rows($result) > 0) {

   
   
    ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php  
            while($row = mysqli_fetch_assoc($result)){
            
            
            ?>
            <tr>
                <td><?php echo $row['s_id']?></td>
                <td><?php echo $row['s_name']?></td>
                <td><?php echo $row['s_address']?></td>
                <td><?php echo $row['c_name']?></td>
                <td><?php echo $row['s_phone']?></td>
                
                <td>
                    <a href='edit.php?id=<?php echo $row['s_id']?>'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php }?>
           
        </tbody>
    </table>
    <?php } else{
        echo "<h2>No Record found!</h2>";
    } 
    mysqli_close($conn);
     ?> 
</div>
</div>
</body>
</html>
