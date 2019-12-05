
<?php
$servername="localhost";
$username = "root";
$password ="";
$dbname = "travelagency";
$conn = new mysqli ($servername, $username, $password, $dbname);
    if(isset($_POST['add']))
    {
        $conn = new mysqli("localhost","root","","travelagency");
        $name = $_POST['name'];
        $country_code = $_POST['select'];
        $phone = $_POST['phone'];
        $gmail = $_POST['gmail'];
        $pass = $_POST['pass'];
        $check =0;
$sqlcheck = "SELECT email FROM sign_up";
$sqlcheck = mysqli_query($conn,$sqlcheck);
if($rowcheck = mysqli_fetch_array ($sqlcheck) )
{
         $mail = $rowcheck['email'];
        if( $mail  != $gmail && $check == 0)
        {    
    $sql = "INSERT INTO sign_up (user_name,country_code,phone_no,email,password)
    VALUES ('$name','$country_code','$phone','$gmail','$pass')";
                echo "<h1>Success!!";
                $check = 1;
        }
}
        if($check == 0){
        echo "Email already exist";
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
    <div class="signin-wrapper">
    <div class="wrapper">
        <h1>TRAVEL AGENCY SIGN IN FORM</h1>
        <div class="form">
            <form action="customer-signin.php" method="POST" >
                <div class="user">
                    <label for="user">username</label>
                    <input id="user" type="text" placeholder="username"name="username">
                </div>
                <div class="pass">
                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="password" name="pass" >
                </div>
                <div class="signin">
                    <button name="add" value="submit"> SIGN IN</button>
                </div>
                <div class="noaccount">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a> </p>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
