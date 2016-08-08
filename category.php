<?php

$host = "localhost";
$username = "root";
$password = "pichaser";
$db = "tv";

$conn = new mysqli($host, $username, $password, $db);

$category = $_POST['chan_cat'];

$query = "SELECT * 
          FROM directv 
          WHERE channel_category = '$category'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
   echo "<h1>DirecTV</h1>"; ?>
   <style>
      table, th, td {
        border: 1px solid black;
      }
  </style>
  <?php echo "<h2>$category</h2>"; ?>
  <table>
     <tr>
       <th>Number</th>
       <th>Channel</th>
     </tr>
   <?php while($row = mysqli_fetch_assoc($result)) { ?>
       <tr>
          <td><?php echo $row['channel_number']; ?></td>
          <td><?php echo $row['channel_name']; ?></td>
       </tr><br>
 <?php } ?>
  </table>
<?php } else {
     echo "<h1>DirecTV</h1>";
     echo "Channels not found.";
  }
  
mysqli_close($conn);    

?>