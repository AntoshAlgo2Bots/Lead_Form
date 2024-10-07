<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "for_office";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Loop through the incoming data
  foreach ($_POST['rows'] as $row) {
    $id = intval($row['id']); // Make sure to sanitize input
    $record_no = intval($row['record_no']);
    $assigned_to = $conn->real_escape_string($row['assigned_to']);
    $query_start_date = $conn->real_escape_string($row['query_start_date']);
    $follow_up = $conn->real_escape_string($row['follow_up']);
    $followup_reminder_frequency = $conn->real_escape_string($row['followup_reminder_frequency']);
    $no_of_times = intval($row['no_of_times']);
    $query_end_date = $conn->real_escape_string($row['query_end_date']);
    $installation_required = $conn->real_escape_string($row['installation_required']);
    $tentative_installation = $conn->real_escape_string($row['tentative_installation']);
    $tentative_delivery_date = $conn->real_escape_string($row['tentative_delivery_date']);

    // Prepare SQL update query
    $sql = "UPDATE lead_details_middle_level_form SET 
                  record_no = '$record_no', 
                  assigned_to = '$assigned_to', 
                  query_start_date = '$query_start_date', 
                  follow_up = '$follow_up', 
                  followup_reminder_frequency = '$followup_reminder_frequency', 
                  no_of_times = '$no_of_times', 
                  query_end_date = '$query_end_date', 
                  installation_required = '$installation_required', 
                  tentative_installation = '$tentative_installation', 
                  tentative_delivery_date = '$tentative_delivery_date' 
              WHERE id = $id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully for ID: $id<br>";
    } else {
      echo "Error updating record for ID: $id - " . $conn->error . "<br>";
    }
  }
}
?>