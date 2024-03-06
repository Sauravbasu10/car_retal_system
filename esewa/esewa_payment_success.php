<?php
include '../connection.php';
$conn = Connect();

if (isset($_REQUEST['oid']) &&
isset($_REQUEST['amt']) &&
isset($_REQUEST['refId'])) 
{

    

    $g_id = $_REQUEST['oid'];
    $amt = $_REQUEST['amt'];
    
    $sql = "SELECT * FROM rentedcars WHERE id = $g_id";
    $res = $conn->query($sql);

    $rowCount = $res->num_rows;
    if ($rowCount == 1) {
        $results = $res->fetch_assoc();
        $url = "https://uat.esewa.com.np/epay/transrec";

        $data = [
            'amt' => $amt,
            'rid' => $_REQUEST['refId'],
            'pid' => $results['id'],
            'scd' => 'epay_payment'
        ];

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $response_code = get_xml_node_value('response_code', $response);
       
    
        if ((trim($response_code) == 'Success') ) {
            $sql = "UPDATE rentedcars SET paid_stat = 1 , return_status='R' WHERE id = $g_id";
            $res0 = $conn->query($sql);
            
            $esewa_msg_sucess[]='Payment is Sucessfull.!';
            echo $esewa_msg_sucess; 
            echo 'Thank you for purchasing with us. Your payment has been successful.';

            header('Location: success.php'); // Redirect to success.php
            exit(); // Always exit after a header redirect
        }
    }
}

function get_xml_node_value($node, $xml) {
    if ($xml === false) {
        return false;
    }
    $found = preg_match('#<' . $node . '(?:\s+[^>]+)?>(.*?)' . '</' . $node . '>#s', $xml, $matches);
    if ($found !== false) {
        return $matches[1];
    }

    return false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Selection and Photo Insertion</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body></body>
</html>
