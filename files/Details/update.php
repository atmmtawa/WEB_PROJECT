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
        font-family: Arial, sans-serif;
        text-align: center;
        background-color:lightblue; 
        margin: 0; 
        padding: 0; 
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    form label {
        font-weight: bold;
    }

    form select {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    form input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        background-color: #;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    form input[type="submit"]:hover {
        background-color: #555;
    }


    h1 {
        color: #457d58;
        margin-top: 20px; 
    }

    label {
        display: block; 
        margin-bottom: 10px;
    }

    select, input[type="submit"] {
        padding: 10px;
        margin: 10px;
        width: 100%; 
        border: 1px solid #ccc; 
        border-radius: 5px; }

    #updateForm {
        display: none;
        background-color: #fff; 
        padding: 20px; 
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); 
    }
    #button1{
    width: 20%;
    background-color: white;
    border-radius: 3px;
    cursor: pointer;
    }
    #button1:hover{
    box: shadow 0.4s;
    background-color: lightblue;

    }

    #successMessage {
        color: green;
        display: none;
        margin-top: 10px; 
    }
    input[type="email"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
</style>

</head>
<body>
    <h1>Update Education Level</h1>
    
    <form action="" method="POST">
                    <div class="form-group">
                <label for="email" style="color:#457d58;">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
            </div>
        <label for="currentLevel" style="color:#457d58;">Select your current education level:</label>
        <select name="currentLevel" id="currentLevel">
            <option value="Ordinary level">Ordinary level</option>
            <option value="Advanced Level">Advanced Level</option>
            <option value="Diploma level">Diploma level</option>
        </select>

      <label for="newLevel" style="color:#457d58;">Select your new education level:</label>
     <select name="newLevel" id="newLevel">
                
                <option value="Advanced Level" style="color:#457d58;">Advanced Level</option>
                <option value="Diploma level">Diploma level</option>
                <option value="Ordinary level">Ordinary Level</option>


            </select>
            <button type="submit" id="button1" name="register">update</button><br><br>
            <div class ="bottom-link">
            Login again
        <a href="userlogin.php">Login</a>
    </div>
        </div>
    </form>

    <p id="successMessage" style="display:none;">Education level updated successfully!</p>
    
</body>
</html>
