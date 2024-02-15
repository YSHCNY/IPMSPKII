<?php

include 'conn.php';

function isOnline($ip)
{
    $port = 80; // You can change this port according to your requirement
    $timeout = 1; // Timeout in seconds

    $fp = @fsockopen($ip, $port, $errno, $errstr, $timeout);
    if ($fp) {
        fclose($fp);
        return true;
    } else {
        return false;
    }
}

// Function to get response time using cURL
function getResponseTime($url)
{
    $start = microtime(true);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    $end = microtime(true);
    curl_close($ch);
    return round(($end - $start) * 1000, 2) . 'ms'; // Response time in milliseconds
}

if (!isset($_GET['selectedOption']) || empty($_GET['selectedOption'])) {
    // Handle the case where no option is selected
    // For example, fetch all records
    $sql = "SELECT * FROM ips";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll();
} else {
    // Handle the case where an option is selected
    $selectedOption = $_GET['selectedOption'];
    $sql = "SELECT * FROM ips WHERE `type` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$selectedOption]);
    $data = $stmt->fetchAll();
}


// Loop through the data and update status and response time
foreach ($data as &$row) {
    $ip = $row['ipname'];
    $pingreply = exec("ping -n 1 $ip");
    $url = "http://$ip";
    if (isOnline($ip) && substr($pingreply, -2) == 'ms') {
        $row['status'] = 'Online';
        $row['response_time'] = getResponseTime($url);
        $row['rs'] = substr($pingreply, -13);
    } else {
        $row['status'] = 'Offline';
        $row['response_time'] = 'N/A';
        $row['rs'] = '0';
    }
}

// Output the modified data as JSON
echo json_encode($data);


?>












