<?php
include "db.php";
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Payments</title>
</head>
<body>

<h2>Payments List</h2>

<?php include "nav.php"; ?>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Booking ID</th>
    <th>Amount Paid</th>
    <th>Date Paid</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM payments");

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['booking_id']."</td>";
  echo "<td>₱".number_format($row['amount_paid'],2)."</td>";
  echo "<td>".$row['payment_date']."</td>";
  echo "</tr>";
}
?>

</table>

</body>
</html>