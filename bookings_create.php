<?php
include "db.php";

if (isset($_POST['save'])) {

  $client_id = $_POST['client_id'];
  $service_id = $_POST['service_id'];
  $date = $_POST['booking_date'];
  $status = $_POST['status'];

  mysqli_query($conn, "INSERT INTO bookings (client_id, service_id, booking_date, status)
                       VALUES ('$client_id', '$service_id', '$date', '$status')");

  header("Location: bookings_list.php");
}
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Create Booking</title>
</head>
<body>

<?php include "nav.php"; ?>

<h2>Create Booking</h2>

<form method="POST">
  <label>Client ID:</label><br>
  <input type="number" name="client_id" required><br><br>

  <label>Service ID:</label><br>
  <input type="number" name="service_id" required><br><br>

  <label>Booking Date:</label><br>
  <input type="date" name="booking_date" required><br><br>

  <label>Status:</label><br>
  <input type="text" name="status" required><br><br>

  <button type="submit" name="saSSve">Create Booking</button>
</form>

</body>
</html>