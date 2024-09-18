<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "for_office";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}






$sql = "SELECT * FROM for_office.lead_details_header_form;";


$result = mysqli_query($conn, $sql);

include("./navForLogged.php");


if ($_SERVER['REQUEST_METHOD'] == "GET") {



    if (isset($_GET["search_query"])) {
        $query = $_GET["search_query"];

        $sql = "SELECT * FROM  lead_details_header_form  where record_no ='$query' or created_by ='$query' or form_status='$query' ";

        $result = mysqli_query($conn, $sql);

        // echo "QIURY";
    }
}





if (mysqli_num_rows($result) > 0) {

    // echo "is fetch successfukky";
}





?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Lead Genration Header Report</title>
</head>

<body>
    
    <h1 class="text-4xl text-center underline font-bold">Lead Generation Report</h1>
    
    <form class="flex items-center  max-w-lg mx-auto my-6" method="GET">
        <label for="voice-search" class="sr-only">Search</label>
        <div class="relative w-full mr-2">
            
            <input type="text" id="voice-search" name="search_query"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Search Details From Database..." required />

        </div>
        <button type="submit" name="search"
        class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
    </svg>Search
</button>
</form>


    <div class="relative overflow-x-auto mx-10">
        <table class="w-full text-sm text-left  rtl:text-right text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase bg-blue-300 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-1">
                        Record No.
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Created By
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Created Date
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Lead Source
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Ref By
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Ref Phone NoW
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Lead Type
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Contact Person Name
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Contact Person Phone No
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Contact Person Email
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Contact Person Address
                    </th>
                    <th scope="col" class="px-6 py-1">
                        Lead Receiving Date
                    </th>
                </tr>
            </thead>
            <tbody>


                <?php

                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $i++;

                    ?>



                    <tr class="hover:bg-gray-100 bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            <?php echo $row['record_no'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['created_by'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['created_date'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['form_status'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['lead_source'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['ref_By'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['ref_phone_no'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['lead_type'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['contact_person_name'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['contact_person_phone_no'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['contact_person_email'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['contact_person_address'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['lead_received_date'] ?>
                        </td>
                    </tr>
                </tbody>
                <?php

                }
                ?>
        </table>
    </div>

</body>

</html>