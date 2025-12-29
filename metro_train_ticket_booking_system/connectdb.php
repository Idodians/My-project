<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "metro_train_ticket_booking_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connections
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO TrainDetails (Train_name, Starting_point, Destination)
VALUES ('Tirupati_metro', 'Delhi', 'Tirupati');";
$sql .= "INSERT INTO TrainDetails (Train_name, Starting_point, Destination)
VALUES ('mumbai_metro', 'Mumbai', 'Pondicherry');";
$sql .= "INSERT INTO TrainDetails (Train_name, Starting_point, Destination)
VALUES ('Hydrebad_metro', 'Hydrebad', 'Bangloor');";


if ($conn->multi_query($sql) === TRUE) {
  echo "Tables inserted successfully and new records created successfully";
} else {
  echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();
?>