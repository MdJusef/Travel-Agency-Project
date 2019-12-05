
<?php

if(isset($_POST['add'])){
    $conn = new mysqli("localhost","root","","travelagency");
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $check = 0;
    
    $sql = "SELECT user_name,password FROM sign_up WHERE user_name = '$username' AND password ='$password'";

    $sql = mysqli_query($conn,$sql);
if($rowcheck = mysqli_fetch_array ($sql) )
{
     $numm = $rowcheck['user_name'];
     $pass = $rowcheck['password'];
    if( $numm == $username && $password == $pass && $check == 0)
    { 
            echo "<h1>Welcome to ".$username. " </h1>";
            $check = 1;
    }
}
    if($check == 0)
    echo "<h1>No account in this username . Please Sign Up First <h1>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Travel Agency</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="bg-image">
        <div class="search-bar">
            <form action="customer.php">
            <h1>Where you want to go</h1>
            <div class="inner-search-bar">
                <select name="place" id="searching-place">
                    <option value="Cox's Bazar">Cox's Bazar</option>
                    <option value="Jaflong">Jaflong</option>
                    <option value="Bandarban">Bandarban</option>
                    <option value="Rangamati">Rangamati</option>
                    <option value="St. Martin's Isla">St. Martin's Islan</option>
                    <option value="Chittagong">Chittagong</option>
                </select>
            </div>
            <div class="save-button">
                <button name="add"value="submit"> Save</button>
            </div>
        </form>
        </div>
        <div class="three-img-one-block">
            <div class="first-img">
                <h2>COXS BAZAR</h2>
                <img src="images/coxsbazar.jpg" alt="pic1">
            </div>
            <div class="second-img">
                <h2>JAFLONG</h2>
                <img src="images/jaflong.jpg" alt="pic2">
            </div>
            <div class="third-img">
                <h2>BANDARBAN</h2>
                <img src="images/bandarban.jpg" alt="pic3">
            </div>
        </div>


        <div class="three-img-another-block">
                <div class="first-img">
                    <h2>RANGAMATI</h2>
                    <img src="images/coxsbazar.jpg" alt="pic1">
                </div>
                <div class="second-img">
                    <h2>ST. MARTIN'S ISLAND</h2>
                    <img src="images/jaflong.jpg" alt="pic2">
                </div>
                <div class="third-img">
                    <h2>CHITTAGONG</h2>
                    <img src="images/bandarban.jpg" alt="pic3">
                </div>
            </div>
    </div>
    
</body>
</html>
