<?php
// Retrieve data from the request
$name = isset($_GET['name']) ? $_GET['name'] : "";
$email = isset($_GET['email']) ? $_GET['email'] : "";
$date = isset($_GET['date']) ? $_GET['date'] : "";
$people = isset($_GET['people']) ? $_GET['people'] : "";
$message = isset($_GET['message']) ? $_GET['message'] : "";

// Process the data (you can perform database operations or other processing here)

// Return a response (for demonstration purposes, we'll just echo the data)
echo "<h2>Booking Details:</h2>";
echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Date:</strong> $date</p>";
echo "<p><strong>Number of People:</strong> $people</p>";
echo "<p><strong>Special request:</strong> $message</p>";
?>
