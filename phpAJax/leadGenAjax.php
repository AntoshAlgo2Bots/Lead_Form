<?php

include("../db/db.php");



$created_by = $_POST['created_by'];
$created_lead = $_POST['created_lead'];
$record_no = $_POST['record_no'];
$contact_person_details = $_POST['contact_person_details'];
$lead_source = $_POST['lead_source'];
$lead_type = $_POST['lead_type'];
$assigned_to = $_POST['assigned_to'];
$query_received_date = $_POST['query_received_date'];
$query_start_date = $_POST['query_start_date'];
$query_end_date = $_POST['query_end_date'];
$follow_up = $_POST['follow_up'];
$re_query = $_POST['re_query'];
$re_query_closure_date = $_POST['re_query_closure_date'];
$re_query_end_date = $_POST['re_query_end_date'];
$followup_reminder_frequency = $_POST['followup_reminder_frequency'];
$no_of_times = $_POST['no_of_times'];

$sql ="INSERT INTO create_query_form(created_by, created_lead, contact_person_details, lead_source, lead_type, assigned_to, query_received_date, query_start_date, query_end_date, follow_up, re_query, re_query_closure_date, re_query_end_date,followup_reminder_frequency,no_of_times) 
VALUES ('$created_by', '$created_lead', '$contact_person_details', '$lead_source', '$lead_type', '$assigned_to', '$query_received_date', '$query_start_date', '$query_end_date', '$follow_up', '$re_query', '$re_query_closure_date', '$re_query_end_date','$followup_reminder_frequency','$no_of_times')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";


    header("location:../leadGnration.php");



  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



  $conn->close();  

?>