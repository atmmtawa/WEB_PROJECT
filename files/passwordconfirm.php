<?php
session_start();
include("conn.php");

$current_password_error = "";
$new_password_error = "";
$confirm_password_error = "";
$email = ""; // Initialize the email variable with an empty string

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Retrieve the user's email
    // Rest of your code...
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Retrieve the user's email
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Fetch the stored (plain text) password from the database
    $sql = "SELECT password FROM clients WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        // Verify the current password (plaintext comparison)
        if ($currentPassword === $storedPassword) {
            // Current password is correct
            if ($newPassword === $confirmPassword) {
                // Start a transaction
                mysqli_begin_transaction($conn);

                // Update the password in the "clients" table
                $updateSql1 = "UPDATE clients SET password = '$newPassword' WHERE email = '$email'";
                if (mysqli_query($conn, $updateSql1)) {
                    // Update the password in the "login" table
                    $updateSql2 = "UPDATE login SET password = '$newPassword' WHERE email = '$email'";
                    if (mysqli_query($conn, $updateSql2)) {
                        // Commit the transaction
                        mysqli_commit($conn);
                        echo "Password updated successfully ";
                    } else {
                        // Rollback the transaction if the second update fails
                        mysqli_rollback($conn);
                        echo "Error updating password in the 'login' table: " . mysqli_error($conn);
                    }
                } else {
                    // Rollback the transaction if the first update fails
                    mysqli_rollback($conn);
                    echo "Error updating password in the 'clients' table: " . mysqli_error($conn);
                }
            } else {
                echo "New password and confirm password do not match.";
            }
        } else {
            echo "Incorrect current password.";
        }
    } else {
        echo "User not found in the database.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
        }

        h1 {
            text-align: center;
            color: #457d58;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="password"] {
            width: 85%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="email"] {
            width: 85%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #button1 {
            width: 20%;
            background-color: white;
            border-radius: 3px;
            cursor: pointer;
        }

        #button1:hover {
            box: shadow 0.4s;
            background-color: lightblue;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Password Update</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="email" style="color:#457d58;">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
            </div>
            <div class="form-group">
                <label for="current_password" style="color:#457d58;">Current Password:</label>
                <input type="password" id="current_password" name="current_password" placeholder="Enter current password" required>
                <div class="error"><?php echo $current_password_error; ?></div>
            </div>
            <div class="form-group">
                <label for="new_password" style="color:#457d58;">New Password:</label>
                <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
                <div class="error"><?php echo $new_password_error; ?></div>
            </div>
            <div class="form-group">
                <label for="confirm_password" style="color:#457d58;">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password" required>
                <div class="error"><?php echo $confirm_password_error; ?></div>
            </div>
            <button type="submit" id="button1" name="register">Update</button><br><br>
        </form>
        <div class ="bottom-link">
            Login again
        <a href="userlogin.php">Login</a>
    </div>
    </div>

</body>
</html>
