<?php
include "db.php";

$message = "";

if (isset($_POST['save'])) {
    $client_id = $_POST['client_id'];
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $createdat = $_POST['created_at'];

    if ($full_name == "" || $email == "") {
        $message = "Name and Email are required!";
    } else {
        $stmt = $conn->prepare("INSERT INTO clients (client_id,full_name,email,phone,address,created_at) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $client_id, $full_name, $email, $phone, $address, $createdat);
        $stmt->execute();

        header("Location: clients_list.php");
        exit;
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Client</title>
</head>

<body>
<?php include "nav.php"; ?>


<h2>Add Client</h2>
<p style="color:red;"><?php echo $message; ?></p>

<form method="post">
    <label>Client ID</label><br>
    <input type="text" name="client_id"><br><br>

    <label>Full Name *</label><br>
    <input type="text" name="full_name" required><br><br>

    <label>Email *</label><br>
    <input type="email" name="email" required><br><br>

    <label>Phone</label><br>
    <input type="text" name="phone"><br><br>

    <label>Address</label><br>
    <input type="text" name="address"><br><br>
    <label>Created At</label><br>
    <input type="datetime-local" name="created_at" value="<?php echo date('Y-m-d\TH:i'); ?>"><br><br>

    <button type="submit" name="save">Save Client</button>
</form>

</body>
</html>