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

$created_by = $_SESSION["username"];
$created_date = date("Y-m-d H:i:s");
$assigned_to = $_POST['assigned_to'];
$query_start_date = $_POST['query_start_date'];
$follow_up = $_POST['follow_up'];
$followup_reminder_frequency = $_POST['followup_reminder_frequency'];
$no_of_times = $_POST['no_of_times'];
$query_end_date = $_POST['query_end_date'];
$installation_required = $_POST['installation_required'];
$tentative_installation = $_POST['tentative_installation'];
$tentative_delivery_date = $_POST['tentative_delivery_date'];






?>