

<?php
$data = json_decode($_POST['data']);

$servername = "localhost";
$username = "root";
$password = "1311a11";
$dbname = "site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact_form ( sender_name, sender_email, message, send_date)
VALUES ('".$data->name."', '".$data->email."','".$data->text."', Now())";

if ($conn->query($sql) === TRUE) {
    print_r(json_encode( array( 'success' => true )));
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
