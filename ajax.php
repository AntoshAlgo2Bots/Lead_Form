<?php



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    include('./db/db.php'); // Moved the database connection to the top to avoid repetition.

    // Check if the request is for item codes
    if (isset($_GET['itemCodeInfoForPr'])) {
        
        $sql = "SELECT item_code FROM for_office.item_master_main;";
        $result = mysqli_query($conn, $sql);

        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row["item_code"];
        }

        echo json_encode($data);
        
    // Check if the request is for a short description
    } else if (isset($_GET['getShortDiscriptionWithItemCode'])) {

        // Validate and sanitize the input
        $item_Code = isset($_GET['itemcode']) ? mysqli_real_escape_string($conn, $_GET['itemcode']) : '';

        // Check if item code is provided
        if (!empty($item_Code)) {
            $sql = "SELECT Short_Description FROM for_office.item_master_main WHERE item_code = '$item_Code';";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                if ($row) {
                    $sDiscription = $row["Short_Description"];
                    $response["sDiscription"] = $sDiscription;
                } else {
                    $response["error"] = "Item code not found.";
                }
            } else {
                $response["error"] = "Query failed: " . mysqli_error($conn);
            }
        } else {
            $response["error"] = "Item code is required.";
        }

        echo json_encode($response);
    }
}


?>