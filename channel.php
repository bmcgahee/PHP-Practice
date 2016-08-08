<?php

$host = "localhost";
$username = "root";
$password = "pichaser";
$db = "tv";

$conn = new mysqli($host, $username, $password, $db);

$channel = $_POST['chan_pre'];

$query = "SELECT * 
          FROM directv 
          WHERE channel_name = '$channel'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
   echo "<h1>DirecTV</h1>"; ?>
   <style>
      table, th, td {
        border: 1px solid black;
        padding: 10px;
      }
  </style>
  <table>
     <tr>
       <th>Number</th>
       <th>Channel</th>
       <th>Category</th>
     </tr>
   <?php while($row = mysqli_fetch_assoc($result)) { ?>
       <tr>
          <td><?php echo $row['channel_number']; ?></td>
          <td><?php echo $row['channel_name']; ?></td>
          <td><?php echo $row['channel_category']; ?></td>
       </tr><br>
 <?php } ?>
  </table>
<?php } else {
     echo "<h1>DirecTV</h1>";
     echo "Channel not found.";
  }
  
mysqli_close($conn);    

?>