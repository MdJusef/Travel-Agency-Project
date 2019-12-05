<?php

    if(isset($_POST['save'])){

        // database conection
        $conn = new mysqli("localhost","root","","travelagency");

        //variable declaration

        $customer_id = $_POST['customer_id'];
        $customer_name = $_POST['customer_name'];
        $customer_address = $_POST['customer_address'];
        $customer_phone = $_POST['customer_phone'];
        $customer_email = $_POST['customer_email'];
        
        //sql query

        $sql = "INSERT INTO customer_info (c_id,c_name,c_address,c_phone,c_email )
        VALUES ('$customer_id','$customer_name', '$customer_address', ' $customer_phone','$customer_email'  )";

        if ($conn->query($sql) == TRUE) {
        echo "New record created successfully";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="reservation-wrapper">
        <br>
         <!--  ----------------------
            ---- Hotel booking form----
        ------------------------------->
        <form>

            <div class="container col-md-6 offset-md-3 my-form">

                <h2>HOTEL RESERVATION</h2>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mail">Email</label>
                    <input type="email" id="mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Room Type</label>
                    <select name="" id="" class="form-control">
                        <option value="Choose Your Option">Choose Your Option</option>
                        <option value="VIP">VIP</option>
                        <option value="Normal">Normal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="no-of-guests">No Of Guests</label>
                    <input type="number" id="no-of-guests" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dateandtime">Arrival Date</label>
                    <input type="data" id="dateandtime" class="form-control" placeholder="mm/dd/yyyy">
                </div>
                <div class="form-group">
                    <label for="ddate">Departure Date</label>
                    <input type="ddata" id="ddate" class="form-control" placeholder="mm/dd/yyyy">
                </div>
                <div class="form-group">
                    <label for="comment">Special Request</label>
                    <textarea name="" id="" cols="15" rows="5" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

        <!--  ----------------------
            ---- transportation form----
        ------------------------------->
        <h2><br></h2>
        <form>

            <div class="container col-md-6 offset-md-3 my-form">

                <h2>TRANSPORTATION</h2>
                <div class="form-group">
                    <label for="">Transportation Type</label>
                    <select name="" id=""class="form-control">
                        <option value="Choose Your Option">Choose Your Option</option>
                        <option value="Bus">Bus</option>
                        <option value="Airlines">Airlines</option>
                        <option value="Train">Train</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mail">Email</label>
                    <input type="email" id="mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="journey">Journey From</label>
                    <input type="text"id="journey"class="form-control">
                </div>
                <div class="form-group">
                        <label for=""> Type</label>
                        <select name="" id="" class="form-control">
                            <option value="Choose Your Option">Choose Your Option</option>
                            <option value="Business Class">Business Class</option>
                            <option value="Economic Class">Economic Class</option>
                        </select>
                    </div>
                
                <div class="form-group">
                        <label for="to">Journey To</label>
                        <input type="text"id="to"class="form-control">
                    </div>
                
                <div class="form-group">
                    <label for="ddate">Departure Date</label>
                    <input type="ddata" id="ddate" class="form-control" placeholder="mm/dd/yyyy">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
        <br>



    </div>
</body>

</html>