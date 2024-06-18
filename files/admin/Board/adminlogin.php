<?php
session_start();

$server = "localhost";
$user = "root";
$pass = "";
$db = "career_guidance";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $error="";
    $status = 1;
    $message="";
    if(empty($password)){
        $error ="password is empty";
    }else if(empty($email)){
        $error="email is empty";
    }else if($password != $cpassword){
        $error="password Does not match";
    }else if(!empty($email) && !empty($password)){
        $select ="select * from login where email = '$email'";
        if(!mysqli_num_rows(mysqli_query($conn,$select))>0){
            $sql = "insert into login(email,password,status) values('$email','$password','$status')";
            if(mysqli_query($conn, $sql)){
                $message="data successfully Inserted";
            }else{
                $error="Data failed";
            }

        }else{
            $error="User Alrady Exist";
        }

       
    }else{
        $error="Fill All Filled";
    }
}






mysqli_close($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            width: auto;
            background-color: white;
            /* background-image: url('try.jpg'); */

        }

        .login-container {
            width: 500px;
            margin: 200px auto;
            margin-top: 150px;
            padding: 20px;
            /* border: 1px solid ; */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            background-color: white;
            
            border-bottom: 5px solid orange;
            border-top: 5px solid orange;
        }

        input[type="email"],
        input[type="password"],
        select {
            width: 450px;
            padding: 20px;
            box-shadow:inset 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
            margin: 5px 0;
            border: 1px solid whitesmoke;
            border-radius: 10px;
        }

        #button2 {
            background-color: orange;
            color: white;
            padding: 15px;
            min-width: 100px;
            border: none;
            border-radius: 50px;
            /* border-radius: 3px; */
            cursor: pointer;

        }

        #button2:hover {
            box: shadow 0.4s;
            background-color: #ff9b50;

        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2 style="color:black;text-transform:uppercase;font-weight:100;font-family:segoe UI">Register Admin</h2>
        <?php
            if(!empty($error)){
                echo "<div class='btn btn-danger'>".$error."</div>";
            }
            if(!empty($message)){
                echo "<div class='btn btn-success'>".$message."</div>";
            }
        ?>
        <form method="POST">
            <div style="text-align:start; !important;margin-left:10px; font-weight:100;font-family:segoe UI">Email:</div>
            <input type="email" name="email" placeholder="Enter Admin email" ><br>
            <div style="text-align:start; !important;margin-left:10px; font-weight:100;font-family:segoe UI">Password:</div>
            <input type="password" name="password" placeholder="Enter Admin password" ><br><br>
            <div style="text-align:start; !important;margin-left:10px; font-weight:100;font-family:segoe UI">Confirm Password:</div>
            <input type="password" name="cpassword" placeholder="Confirm Admin password" ><br><br>
            <button type="submit" id="button2" name="login">Add</button>
        </form><br>
        <a class="btn btn-primary" href="dashboard.php">Back Home</a>
</body>

</html>