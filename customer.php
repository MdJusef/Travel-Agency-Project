<?php

if(isset($_POST['add'])){
    $conn = new mysqli("localhost","root","","travelagency");

    $destination = $_POST['place'];
    
    $sql = "INSERT INTO destination (dest_name)
    VALUES ('$destination')";

    if ($conn->query($sql) == TRUE) {
        echo  "<h1>welcome to " .$destination. " </h1>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    } 
}  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel Agency</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="customer-wrapper">
    <div class="all-area">
        <h1>TRAVEL AGENCY CUSTOMER INFO</h1>
        <div class="form">
            <form action="reservation.php" method="POST" >
                <div class="customer-id">
                    <label for="c-id">Customer Id</label>
                    <input name="customer_id" id="c-id" type="text" placeholder="Enter Your Id">
                </div>
                <div class="customer-name">
                    <label for="c-name">Customer Name</label>
                    <input name="customer_name" id="c-name" type="text" placeholder="Enter Your Name">
                </div>
                <div class="customer-address">
                    <label for="c-address">Customer Address</label>
                    <input name="customer_address" id="c-address" type="text" placeholder="Enter Your Address">
                </div>
                <div class="phone-no">
                    <label for="p-no">Phone No</label>
                    <input name="customer_phone" id="p-no" type="number" placeholder="Enter Phone No">
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input name="customer_email" id="email" type="email" placeholder="Enter mail id">
                </div>
                <div class="save">
                    <button value="submit" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
