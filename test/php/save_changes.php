<?php
// Include the database connection file
include 'conn.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $id = $_POST['id'];
    $colA = $_POST['colA'];
    $colB = $_POST['colB'];
    $colC = $_POST['colC'];
    // You can add more fields as needed

    // Prepare and execute the SQL query to update the record
    $stmt = $conn->prepare("UPDATE ips SET ipname = ?, `desc` = ?, `type` = ? WHERE id = ?");
    $stmt->execute([$colA, $colB, $colC, $id]);

    // Check if the update was successful
    if ($stmt->rowCount() > 0) {
        // Update successful
        echo json_encode(array("success" => true, "message" => "Data updated successfully."));
        header('Location: ../index.php');
        exit;
    } else {
        // Update failed
        echo json_encode(array("success" => false, "message" => "Failed to update data."));
        header('Location: ../index.php');
        exit;
    }
} else {
    // If the request method is not POST
    echo json_encode(array("success" => false, "message" => "Invalid request method."));
}
?>
