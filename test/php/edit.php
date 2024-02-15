<?php
// Include the database connection file
include 'conn.php';

// Check if the ID parameter is set
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Prepare and execute the SQL query to retrieve data for the given ID
    $stmt = $conn->prepare("SELECT ipname, `desc`, `type` FROM ips WHERE id = ?");
    $stmt->execute([$id]);
    
    // Fetch the data
    $itemData = $stmt->fetch();

    // Output HTML content for the modal body
?>
    <form id="editForm">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-4">
            <label for="colA" class="form-label">Edit IP Address:</label>
            <input type="text" class="form-control" id="colA" name="colA" value="<?php echo $itemData['ipname']; ?>">
        </div>
        <div class="mb-4">
            <label for="colB" class="form-label">Edit IP Description:</label>
            <input type="text" class="form-control" id="colB" name="colB" value="<?php echo $itemData['desc']; ?>">
        </div>

        <div class="mb-4">
        <label for="colB" class="form-label">Change IP Type:</label>
        <select class="form-select " id="colC" name="colC" aria-label="Default select example">
                <option class = "bg-info text-dark" selected value = "<?php echo $itemData['type'];?>"><?php echo $itemData['type']; ?></option>
                
                    <?php
                        $sql = "SELECT * FROM iptype";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $data = $stmt->fetchAll();     
                        foreach ($data as &$row) {
                    ?>
                  <option value="<?php echo $row['iptypes'];?>"><?php echo $row['iptypes'];?></option>
                    <?php }  ?>
              
                </select>
        </div>

        <!-- Add other fields as needed -->
        <button type="submit" class="btn btn-primary float-end my-4" onclick="return confirm('Are you sure you want to add this new ip?');">Save Changes</button>
    </form>
















<?php
}
?>
