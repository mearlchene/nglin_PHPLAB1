<?php
include "db.php";

if (isset($_POST['save'])) {
  $booking_id = $_POST['booking_id'];
  $client_id = $_POST['client_id'];
  $service_id = $_POST['service_id'];
  $date = $_POST['booking_date'];
  $hrs = $_POST['hours'];
  $rate = $_POST['hourly_rate_snapshot'];
  $total = $_POST['total_cost'];
  $status = $_POST['status'];
  $createadtat = $_POST['created_at'];

  mysqli_query($conn, "INSERT INTO bookings (booking_id, client_id, service_id, booking_date, hours, hourly_rate_snapshot, total_cost, status, created_at)
                       VALUES ('$booking_id', '$client_id', '$service_id', '$date', '$hrs', '$rate', '$total', '$status', '$createadtat')");

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
  <label>Booking ID:</label><br>
  <input type="number" name="booking_id" required><br><br>

  <label>Client ID:</label><br>
  <input type="number" name="client_id" required><br><br>


  <label>Service ID:</label><br>
  <input type="number" name="service_id" required><br><br>

  <label>Booking Date:</label><br>
  <input type="date" name="booking_date" required><br><br>

  <label>Hours:</label><br>
  <input type="number" name="hours" required><br><br>

  <label>Hourly Rate:</label><br>
  <input type="number" step="0.01" name="hourly_rate_snapshot" required><br><br>

  <label>Total Cost:</label><br>
  <input type="number" step="0.01" name="total_cost" required><br><br>

  <label>Status:</label><br>
  <input type="text" name="status" required><br><br>

  <label>Created At:</label><br>
  <input type="datetime-local" name="created_at" required><br><br>

  <button type="submit" name="save">Create Booking</button>
</form>

</body>
</html>