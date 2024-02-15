<?php
// Include the connection file
require 'conn.php';

// Query to fetch data from the database
$sql = "SELECT ipname, `desc` FROM ips";
$stmt = $conn->query($sql);

// Fetch all rows from the result set
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Initialize empty arrays to store host and services
$host = [];
$services = [];

// Iterate through the rows and populate the arrays
foreach ($rows as $row) {
    $host[] = $row['ipname'];
    $services[] = $row['desc'];
}

// Start building the HTML content for the table
$html = '';

foreach ($host as $key => $value) {
    $counter = $key + 1;
    $html .= "<tr><td width=120>$value</td>";
    $html .= '<body bgcolor="#FFFFFF" text="#000000"></body>';

    // Check target IP or domain
    $pingreply = exec("ping -n 1 $value");
    if (substr($pingreply, -2) == 'ms') {
        $html .= "<td width=230>" . $services[$key] . "</td>";
        $html .= "<td>Reply Speed " . substr($pingreply, -13);
    } else {
        $html .= "<td width=230>" . $services[$key] . "</td>";
        $html .= "<td>Timeout...";
    }

    $html .= "</td></tr>";
}

// Echo the HTML content
echo $html;
?>
