<?php
include "db.php";
 
$id = $_GET['id'];
 
$get = mysqli_query($conn, "SELECT * FROM clients WHERE client_id = $id");
$client = mysqli_fetch_assoc($get);
 
$message = "";
 
if (isset($_POST['update'])) {
  $client_id = $_POST['client_id'];
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $createdat = $_POST['created_at'];
 
  if ($full_name == "" || $email == "") {
    $message = "Name and Email are required!";
  } else {
    $sql = "UPDATE clients
            SET client_id='$client_id', full_name='$full_name', email='$email', phone='$phone', address='$address', created_at='$createdat'
            WHERE client_id=$id";
    mysqli_query($conn, $sql);
    header("Location: clients_list.php");
    exit;
  }
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Edit Client</title></head>
<body>
<?php include "nav.php"; ?>
 
<h2>Edit Client</h2>
<p style="color:red;"><?php echo $message; ?></p>
 
<form method="post">
  <label>Client ID</label><br>
  <input type="text" name="client_id" value="<?php echo $client['client_id']; ?>"><br><br>

  <label>Full Name*</label><br>
  <input type="text" name="full_name" value="<?php echo $client['full_name']; ?>"><br><br>
 
  <label>Email*</label><br>
  <input type="text" name="email" value="<?php echo $client['email']; ?>"><br><br>
 
  <label>Phone</label><br>
  <input type="text" name="phone" value="<?php echo $client['phone']; ?>"><br><br>
 
  <label>Address</label><br>
  <input type="text" name="address" value="<?php echo $client['address']; ?>"><br><br>

  <label>Created At</label><br>
  <input type="datetime-local" name="created_at" value="<?php echo date('Y-m-d\TH:i', strtotime($client['created_at'])) ; ?>"><br><br>
 
  <button type="submit" name="update">Update</button>
</form>
</body>
</html>
 