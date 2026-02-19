<?php
include "db.php";
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Clients</title>
</head>
<body>

<h2>Clients List</h2>

<?php include "nav.php"; ?>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Email</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM clients");

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['contact']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "</tr>";
}
?>

</table>

</body>
</html>