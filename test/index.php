


<?php
    include './php/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PKII IPMS</title>
    <link rel="icon" type="png/x-icon" href="./img/icon.ico">

 
    <link rel="stylesheet" href="./css/style.css">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body class = "overflow-visible bodyC">


<nav class="navbar navbar-expand-lg navbar-light sticky-top " id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" class="img-fluid my-3 md-float-start" alt="">
        </a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex justify-content-lg-end " id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <button type="button" class="nav-link rounded  border-0 text-light my-md-5 my-1 p-2 mx-2 fw-medium" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg text-light fw-medium" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                        </svg> IP Address
                    </button>
                </li>
                <li class="nav-item">
                    <a type="button" class="nav-link rounded border-0  my-md-5 my-1  mx-2 p-2  text-light fw-medium" data-bs-toggle = "modal" data-bs-target="#exampleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg text-light" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                        </svg> IP Type </a>
                </li>

                <li class="nav-item">
                    <a type="button" class="nav-link rounded border-0  my-md-5 my-1  mx-2 p-2  text-light fw-medium" href = "https://www.speedtest.net/run"> 
                       Speed Test <span class = "fs-6 text-light">(ookla)</span>
                        </a>
                </li>

             
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2 text-light" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
                </svg> -->


                <li class="nav-item ">
                <button class="text-light border-0 bg-transparent my-md-5 my-1 float-end ms-2 p-2 " onclick="refreshSelect()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-clockwise fw-bolder " viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                </svg>
            </button>
`
                <select class="rounded vw-50 my-md-5 my-1 p-2 text-light bg-transparent fw-medium  border-0" name="sortip" id="sortip" aria-label="Default select example">
                <option  class = " text-dark fw-medium" selected disabled>Select & Sort IP Type</option>
                <?php
                    $sql = "SELECT * FROM iptype";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $data = $stmt->fetchAll();     
                    foreach ($data as &$row) {
                ?>
                    <option class = " text-dark fw-medium" value="<?php echo $row['iptypes'];?>"><?php echo $row['iptypes'];?></option>
                <?php } ?>
            </select>

            
                </li>
            </ul>
        </div>
       
    </div>
</nav>


<div class="container">
    <div class = "mx-1">
        <div class = "px-2">
   
       



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New IP Type</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="./php/insert_ip.php" method = "POST">
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alphabet-uppercase" viewBox="0 0 16 16">
  <path d="M1.226 10.88H0l2.056-6.26h1.42l2.047 6.26h-1.29l-.48-1.61H1.707l-.48 1.61ZM2.76 5.818h-.054l-.75 2.532H3.51zm3.217 5.062V4.62h2.56c1.09 0 1.808.582 1.808 1.54 0 .762-.444 1.22-1.05 1.372v.055c.736.074 1.365.587 1.365 1.528 0 1.119-.89 1.766-2.133 1.766zM7.18 5.55v1.675h.8c.812 0 1.171-.308 1.171-.853 0-.51-.328-.822-.898-.822zm0 2.537V9.95h.903c.951 0 1.342-.312 1.342-.909 0-.591-.382-.954-1.095-.954zm5.089-.711v.775c0 1.156.49 1.803 1.347 1.803.705 0 1.163-.454 1.212-1.096H16v.12C15.942 10.173 14.95 11 13.607 11c-1.648 0-2.573-1.073-2.573-2.849v-.78c0-1.775.934-2.871 2.573-2.871 1.347 0 2.34.849 2.393 2.087v.115h-1.172c-.05-.665-.516-1.156-1.212-1.156-.849 0-1.347.67-1.347 1.83"/>
</svg></span>
            <input type="text" class="form-control" name="iptype" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        
            </div>

            <div class="input-group">
            <p class = "fs-sm">Type List: </p>
            <?php
                        $sql = "SELECT * FROM iptype";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $data = $stmt->fetchAll();     
                        foreach ($data as &$row) {
                    ?>
                  <div class="container">
                    <div class="row">
                       
                        <div class="col">
                            <h5><?php echo $row['iptypes']; ?></h5>
                        </div>
                        <div class="col">
                        <a href="./php/delete.php?id=<?php echo $row['id']; ?>&deltype=true" onclick="return confirm('Are you sure you want to delete this item?');" class="text-danger text-decoration-none"> Remove</a>

                        
                        </div>
                    </div>
                  </div>
                    <?php }  ?>
            </div>
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="instip" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">New IP Address</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 
            <form action="./php/insert_ip.php" method = "POST">
            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
  <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5z"/>
</svg></span>
   <input type="text" class="form-control required" name="ipname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
   
            </div>


            <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
</svg></span>
   <input type="text" class="form-control required" name="desc" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
   
            </div> 

            <div class="input-group mb-3">
            <select class="form-select w-50 required" name="ipt" aria-label="Default select example">
                <option selected disabled>Select IP Type</option>
                
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
            </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name = "ipnamebtn" onclick="return confirm('Are you sure you want to add this new ip?');">Add new IP</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
      </div>
            
            </form>


      
    </div>
  </div>
</div>




<!-- modal =============================================== -->

   
<div id="ipTable" class="row row-cols-1 row-cols-md-2 g-4">
  
</div>
  

    </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Content of the modal will be populated via JavaScript -->
      </div>
     
    </div>
  </div>
</div>



<div class="modal fade" id="pingModal" tabindex="-1" aria-labelledby="pingModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-modal-dialog ">
        <div class="modal-content blackaf" style = " border-radius: 0 !important;">
        <div class="modal-header bg-light  " style = "border-radius: 0 !important; height: 5% !important;">
            <img src="./img/Group 63.ico" alt="Icon" class="me-2" style="max-width: 16px !important;"> 
            <p class="modal-title text-dark font-monospace lh-sm"   id="pingModalLabel">Ping Prompt</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <div class = "px-2 lh-sm font-monospace text-white float-start d-inline-block p-2">
            <p class = "px-2 text-white">IPMS PKII [Version 1.0] <br> (c) PKII. All rights reserved.</p>
            
            <div class="modal-body custom-modal-body px-2 lh-sm font-monospace text-white float-start ">
              
                <h5 class = "font-monospace lh-sm text-light"> Loading...</h5>
            </div>
            </div>
            
        </div>
    </div>
</div>







<script>
$(document).ready(function() {
   
function updateTable() {
    var selectedOption = $("select[name='sortip']").val(); 
    $.ajax({
        url: './php/ping_ips.php',
        type: 'GET',
        dataType: 'json',
        data: { selectedOption: selectedOption },
        success: function(data) {
            $('#ipTable').empty();
            if (data && data.length > 0) {
                // Update the cards based on the filtered data
                $.each(data, function(index, row) {
                    var Online  = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill mx-2 text-success" viewBox="0 0 16 16"> <circle cx="8" cy="8" r="8"/></svg>';
                    var Offline  = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill mx-2 text-light" viewBox="0 0 16 16"> <circle cx="8" cy="8" r="8"/></svg> (NO CONNECTION)';
                    var statusClass = row.status === 'Online' ? 'text-success' : 'text-danger';
                    var bilog = row.status === 'Online' ? Online : Offline;
                    var statusClassbg = row.status === 'Online' ? 'secondaryColor' : 'bg-danger';
                    $('#ipTable').append(
                        '<div class="col">' +
                            '<div class="card mb-2 borderInner borderOuter rounded border-1  p-2">' +
                            '<div class="card border-0 rounded">'+
                                '<h5 class="card-header fs-lg text-light p-3 fw-bold '+ statusClassbg +'">' + row.desc + bilog + '</h5>' +
                                '<div class="card-body DarkColor2">' +
                                    '<p class="card-title text-light">IP Address: <span class="fw-bold">' + row.ipname + '</span></p>' +
                                    '<p class="card-text text-light">Status: <span class="'+ statusClass +' fw-bold">' + row.status + '</span></p>' +
                                    '<p class="card-text text-light">Response time (cURL): <span class="fw-bold">' + row.response_time + '</span></p>' +
                                    '<p class="card-text text-light">Average response time: <span class="fw-bold">' + row.rs + '</span></p>' +
                                    '<p class="card-text text-light">Endpoint Type: <span class="fw-bold">' + row.type + '</span></p>' +
                                    '<a href="./php/delete.php?id=' + row.id + '&delfa=true" onclick="return confirm(\'Are you sure you want to delete this item?\');" class="float-end text-light me-3 bg-danger p-2 rounded text-decoration-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill danger" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/></svg> Remove</a>' +
                                    '<a href="#" class="float-end text-light btnOrange p-2 rounded me-3 text-decoration-none edit-item" data-id="' + row.id + '" data-bs-toggle="modal" data-bs-target="#editModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16"> <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/> </svg> Edit </a>' +


                                    '<a href="#" class="text-light  p-2 secondaryColor rounded me-3 text-decoration-none ping" data-id="' + row.id + '" data-bs-toggle="modal" data-bs-target="#pingModal""> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16"> <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5z"/></svg> Ping IP</a>' +
                                '</div>' +
                            '</div>' +
                        '</div>'
                    );
                });
            } else {
                // If no data is returned or no option is selected, display a message
                $('#ipTable').append('<div class="alert alert-warning mx-auto my-5">No IP available listed</div>');
            }
        
        }, 

        
        complete: function() {
            setTimeout(updateTable, 900);
        }
    });
}

updateTable();




// Add an event listener for the "Ping IP" button
$(document).on("click", ".ping", function() {
    var ip_id = $(this).data("id");

    // Send an AJAX request to ping_ip.php with the IP ID
    $.ajax({
        url: './php/pinger.php',
        type: 'GET',
        dataType: 'json',
        data: { ip_id: ip_id },
        success: function(response) {
            // Display the ping result in a modal
            $('#pingModal').find('.modal-body').text(response.output);
            $('#pingModal').modal('show');
        },
        error: function(xhr, status, error) {
            // Handle errors
            console.error(xhr.responseText);
        }
    });
});

$('#pingModal').on('hidden.bs.modal', function () {
   
    $(this).find('.modal-body').html('<h5 class="font-monospace lh-sm text-light">Loading...</h5>');
});
    // Event listener for editing items
    $(document).on('click', '.edit-item', function () {
        var id = $(this).data('id');
        $.ajax({
            url: './php/edit.php',
            method: 'GET',
            data: { id: id, edit: true },
            success: function (response) {
                $('#editModal .modal-body').html(response);
            }
        });
    });




    $('#editModal').on('submit', '#editForm', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: './php/save_changes.php', // Change this to the PHP script that handles the update
            method: 'POST',
            data: formData,
            success: function (response) {
                // Close the modal and update the table
                $('#editModal').modal('hide');
                updateTable();
                // Refresh the whole page after a short delay
                setTimeout(function() {
                    // Display an alert and refresh the page
                    alert("Update complete.");
                    location.reload();
                }, 500); // Adjust the delay as needed
            }
        });
    });
});




function refreshSelect() {
    document.getElementById("sortip").selectedIndex = 0; 
}


window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
        navbar.classList.add('bg-scrolled');
    } else {
        navbar.classList.remove('scrolled');
        navbar.classList.remove('bg-scrolled');
    }
});



</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>