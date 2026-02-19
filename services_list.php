<?php
include "db.php";
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Services</title>
</head>
<body>

<h2>Services List</h2>

<?php include "nav.php"; ?>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Service Name</th>
    <th>Price</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM services");

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['service_name']."</td>";
  echo "<td>₱".number_format($row['price'],2)."</td>";
  echo "</tr>";
}
?>

</table>

</body>
</html>