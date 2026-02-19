<?php
include "db.php";

if (isset($_POST['save'])) {

  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];

  mysqli_query($conn, "INSERT INTO clients (name, contact, email)
                       VALUES ('$name', '$contact', '$email')");

  header("Location: clients_list.php");
}
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Client</title>
</head>
<body>

<h2>Add Client</h2>

<?php include "nav.php"; ?>


<form method="POST">
  <label>Name:</label><br>
  <input type="text" name="name" required><br><br>

  <label>Contact:</label><br>
  <input type="text" name="contact" required><br><br>

  <label>Email:</label><br>
  <input type="email" name="email" required><br><br>

  <button type="submit" name="save">Save Client</button>
</form>

</body>
</html>