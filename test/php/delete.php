<?php
include 'conn.php';


if (isset($_GET['delfa'])){
    $id = $_GET['id'];
    
    // Create delete query
    $query = "DELETE FROM ips WHERE id = :id";
    
    try {
        // Prepare the query
        $stmt = $conn->prepare($query);
    
        // Bind parameters
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
        // Execute the query
        if ($stmt->execute()) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    // Redirect back to the main page
    header("Location: ../index.php");
    
    }




    if (isset($_GET['deltype'])){
        $id = $_GET['id'];
        
        // Create delete query
        $query = "DELETE FROM iptype WHERE id = :id";
        
        try {
            // Prepare the query
            $stmt = $conn->prepare($query);
        
            // Bind parameters
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
            // Execute the query
            if ($stmt->execute()) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        // Redirect back to the main page
        header("Location: ../index.php");
        
        }
?>