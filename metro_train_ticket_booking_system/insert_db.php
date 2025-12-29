<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "train_ticket_booking_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO TrainDetails (Train_name, Starting_poin, Destination)
VALUES ('Tirupati_metro', 'Delhi', 'Tirupati');";
$sql = "INSERT INTO TrainDetails (Train_name, Starting_poin, Destination)
VALUES ('mumbai_metro', 'Mumbai', 'Pondicherry');";
$sql = "INSERT INTO TrainDetails (Train_name, Starting_poin, Destination)
VALUES ('Hydrebad_metro', 'Hydrebad', 'Bangloor');";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>