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


$recordNo=$_POST["record_no"];
$assigned_to = $_POST['assigned_to'];
$query_start_date = $_POST['query_start_date'];
$follow_up = $_POST['follow_up'];
$followup_reminder_frequency = $_POST['followup_reminder_frequency'];
$no_of_times = $_POST['no_of_times'];
$query_end_date = $_POST['query_end_date'];
$installation_required = $_POST['installation_required'];
$tentative_installation = $_POST['tentative_installation'];
$tentative_delivery_date = $_POST['tentative_delivery_date'];

$sql = "UPDATE lead_details_middle_level_form SET assigned_to = '$assigned_to', query_start_date = '$query_start_date', follow_up = '$follow_up', followup_reminder_frequency = '$followup_reminder_frequency', no_of_times = '$no_of_times', query_end_date = '$query_end_date', 
installation_required = '$installation_required', tentative_installation = '$tentative_installation', tentative_delivery_date = '$tentative_delivery_date' 
WHERE record_no ='$recordNo'" ;


$response = [];

if ($conn->query($sql) === TRUE) {
  // echo "Record updated successfully";
  $response['status'] = 'success';
  $response['message']='Form Update Successfully';

} else {
  echo "Error updating record: " . $conn->error;
}

echo json_encode( $response );

?>