<?php


$conn = mysqli_connect(
    "localhost",
    "root",
    "root",
    "for_office"
);



if (mysqli_connect_error()) {
    echo "Connection Error.<br>";
}


if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_GET['getUSerDataByUserName'])) {


        // include('../db.php');


        $recordNo = $_GET['recordNo'];
        // $user_id = $_GET['userid'];



        $sql ="SELECT * FROM for_office.lead_details_header_form a inner JOIN for_office.lead_details_middle_level_form b ON a.record_no=b.record_no where a.record_no = '$recordNo'";
        // $sql = "SELECT * FROM lead_details_header_form a JOIN  lead_details_middle_level_form b  ON a.record_no = b.recond_no  where a.record_no = '$recordNo' ;";
        // $sql2 = "SELECT * FROM daily_txn_book.user_role a JOIN  user_role b  ON a.id = b.user_id  where a.user_name = '$user_name' ; ";





        $result = mysqli_query($conn, $sql);



        if ($result) {





            $data = [];


            
            while ($row = mysqli_fetch_assoc($result)) {







                $data[] = $row;



            }
            ;



            $response['success'] = true;
            $response['data'] = $data;




        } else {
            $response['success'] = false;
            $response['message'] = mysqli_error($conn);
        }






        echo json_encode($response);



    }
}


?>