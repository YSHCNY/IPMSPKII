<?php
include 'conn.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['ipnamebtn'])) {
        // Check if the IP address field is empty
        if (empty($_POST['ipname'])) {
            // Redirect back to the test.php page with an error message if the input is empty
            header('Location: ../index.php?error=empty');
            exit;
        } else {
            // Prepare and execute the SQL statement to insert the IP address and description into the database
            $stmt = $conn->prepare("INSERT INTO ips (ipname, `desc`, `type`) VALUES (?, ?, ?)");
            $stmt->execute([$_POST['ipname'], $_POST['desc'], $_POST['ipt']]); // Assuming the description is passed via POST as 'desc'
            
            // Close the database connection
            $conn = null;
            
            // Redirect back to the test.php page after successful insertion
            header('Location: ../index.php');
            exit;
        }
    }
    
    if(isset($_POST['instip'])) {
        // Prepare and execute the SQL statement to insert into the iptype table
        $stmt = $conn->prepare("INSERT INTO iptype (iptypes) VALUES (?)");
        $stmt->execute([$_POST['iptype']]);
        
        // Close the database connection
        $conn = null;
        
        // Redirect back to the test.php page after successful insertion
        header('Location: ../index.php');
        exit;
    }
}
?>
