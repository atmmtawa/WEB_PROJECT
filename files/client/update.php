<?php
session_start();
include("conn.php");

$email = ""; // Initialize the email variable with an empty string

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email']; // Retrieve the user's email
    // Rest of your code...
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email']; // Retrieve the user's email
    $currentLevel = $_POST['currentLevel'];
    $newLevel = $_POST['newLevel'];

    // Fetch the stored (plain text) password from the database
    $sql = "SELECT password FROM clients WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];
        
        // Start a transaction
        mysqli_begin_transaction($conn);

        // Update the password in the "clients" table
        $updateSql1 = "UPDATE clients SET level_of_education = '$newLevel' WHERE email = '$email'";
        if (mysqli_query($conn, $updateSql1)) {
            // Commit the transaction
            mysqli_commit($conn);
            echo "Education level updated successfully ";
        } else {
            // Rollback the transaction if the first update fails
            mysqli_rollback($conn);
            echo "Error updating education level " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Education Level</title>
    <style>
        body {
            background-image: url(./assets/pang-yuhao-_kd5cxwZOK4-unsplash.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-position-y: -220px;
            background-attachment: fixed;

        }

        .menus ul li:nth-child(4) a {
            color: var(--orange);
            font-weight: 500;
            text-transform: uppercase;
        }

        .login-container {
            position: relative;
            z-index: 3;
            width: 500px;
            margin: 20px auto;
            justify-content: center;
            text-align: center;
            align-items: center;
            align-content: center;
            justify-items: center;
            margin-top: 100px;
            border-radius: 10px;
            padding: 15px;
            border-bottom: 5px solid var(--orange);
            color: var(--primary) !important;
            backdrop-filter: blur(20px);
            border-radius: 10Spx;
            background-color: rgba(0, 0, 0, 0.289);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"],
        select {
            width: 450px;
            padding: 20px;
            margin: 5px 0;
            outline: none;
            border: none;
            color: var(--primary);
            background: none;
            background-color: rgba(0, 0, 0, 0.373);
            border-radius: 10px;
        }

        input::placeholder {
            color: var(--primary);
        }


        #button1 {
            cursor: pointer;
        }
    </style>

</head>
<body>
<div class="shadow"></div>
    <?php include("nav.php") ?>
    <div class="login-container">
    <h1>Update Education Level</h1>
    
    <form action="" method="POST">
                    <div class="form-group">
                    <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple color:white;">Email:</div>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
            </div>
            <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple color:white;">Select your current level of education:</div>
        <select name="currentLevel" id="currentLevel">
            <option value="Ordinary level">Ordinary level</option>
            <option value="Advanced Level">Advanced Level</option>
            <option value="Diploma level">Diploma level</option>
        </select>

       <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple color:white;">Selecy your new level of education:</div>
     <select name="newLevel" id="newLevel">
                
                <option value="Advanced Level" style="color:#457d58;">Advanced Level</option>
                <option value="Diploma level">Diploma level</option>
                <option value="Ordinary level">Ordinary Level</option>


            </select>
            <button type="submit" id="button2" name="register" class="button">update</button><br><br>
            <div class ="bottom-link">
            Login again
        <a href="userlogin.php" style="color:var(--orange); text-decoration:none,">Login</a>
    </div>
        </div>
    </form>

    <p id="successMessage" style="display:none;">Education level updated successfully!</p>
    
</body>
</html>
