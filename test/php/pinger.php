<?php
require_once('conn.php');

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Get the IP ID from the query string
    $ip_id = $_GET["ip_id"];

    try {
        // Assuming your table name is "ips" and the column name for IP address is "ipname"
        $sql = "SELECT ipname FROM ips WHERE id = :id";
        // Prepare and execute the SQL query to fetch the IP address
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $ip_id);
        $stmt->execute();

        // Fetch the IP address
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $ip_address = $row['ipname'];

        // Execute the ping command
        $output = shell_exec("ping $ip_address");

        // Return the ping result as JSON
        echo json_encode(["output" => $output], JSON_PRETTY_PRINT);


        

    } catch(PDOException $e) {
        // Handle database connection errors
        echo "Error: " . $e->getMessage();
    }
}
?>
