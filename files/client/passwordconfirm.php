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
            backdrop-filter: blur(4px);
            border-radius: 10Spx;
            background-color: rgba(0, 0, 0, 0.389);
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
            color: var(--gray);
        }


        #button1 {
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="shadow"></div>
    <?php include("nav.php") ?>
    <div class="login-container">
        <h1>Password Update</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <!-- <label for="email" style="color:#457d58;">Email:</label> -->
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
            </div>
            <div class="form-group">
                <!-- <label for="current_password" style="color:#457d58;">Current Password:</label> -->
                <input type="password" id="current_password" name="current_password" placeholder="Enter current password" required>
                <div class="error"><?php echo $current_password_error; ?></div>
            </div>
            <div class="form-group">
                <!-- <label for="new_password" style="color:#457d58;">New Password:</label> -->
                <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
                <div class="error"><?php echo $new_password_error; ?></div>
            </div>
            <div class="form-group">
                <!-- <label for="confirm_password" style="color:#457d58;">Confirm New Password:</label> -->
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password" required>
                <div class="error"><?php echo $confirm_password_error; ?></div>
            </div>
            <button  type="submit" id="button2" name="login" class="button">Update</button><br><br>
        </form>
        <div class ="bottom-link">
            Login again
        <a href="userlogin.php">Login</a>
    </div>
    </div>

</body>
</html>
