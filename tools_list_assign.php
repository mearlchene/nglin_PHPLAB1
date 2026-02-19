<?php
include "db.php";
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tools</title>
</head>
<body>

<h2>Tools List</h2>

<?php include "nav.php"; ?>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Tool Name</th>
    <th>Status</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM tools");

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['tool_name']."</td>";
  echo "<td>".$row['status']."</td>";
  echo "</tr>";
}
?>

</table>

</body>
</html>