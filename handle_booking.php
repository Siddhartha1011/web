<?php
// Assuming you have a MySQL database connection
$servername = "Localhost";
$username = "root";
$password = "Viper@5611";
$dbname = "food";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $partySize = $_POST["partySize"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $sql = "INSERT INTO bookings (name, email, party_size, date, time) VALUES ('$name', '$email', $partySize, '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
