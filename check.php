<?php
$host = "localhost";
$username = "root";
$password = "pichaser";
$db = "school";

$conn = new mysqli($host, $username, $password, $db);

$number = $_POST['id_search'];

$query = "SELECT * 
          FROM students 
          WHERE id = $number";

$result = mysqli_query($conn, $query);


if(mysqli_num_rows($result) > 0) {
  echo "<h1>School Database</h1>"; ?>
  <style>
    table, th, td {
         border: 1px solid black;
    }
  </style>
  <table>
     <tr>
       <th>ID</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Grade</th>
     </tr>
   <?php while($row = mysqli_fetch_assoc($result)) { ?>
       <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['first_name']; ?></td>
          <td><?php echo $row['last_name']; ?></td>
          <td><?php echo $row['grade']; ?></td>
       </tr><br>
 <?php } ?>
  </table>
<?php } else {
     echo "<h1>School Database</h1>";
     echo "Student not found.";
}
  
mysqli_close($conn);    

?>