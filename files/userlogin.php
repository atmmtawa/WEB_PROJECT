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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email; // Start a session
        $sql1 = "SELECT level_of_education FROM clients WHERE email='$email' AND password='$password'";

        $result = $conn->query($sql1);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $userChoices = $row['level_of_education'];
        } else {
            // Handle the case where the user is not found in the database
            // You may want to provide a default behavior in this case
            $userChoices = 'default'; // Set to a default choice
        }
    } else {
        // Handle the case where the user is not logged in
        // You may want to redirect to the login page or show an error message
    }
} else {
    $loginError = "Invalid username or password";
    
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
            margin-top: 200px;
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
<h2 class="title">Login</h2>
        <form  action="userlogin.php" method="post" onsubmit="return validateLoginForm()">
            <input type="email" name="email"  placeholder="Enter your email" required><br>
            <input type="password" name="password"  placeholder="Enter your password" required><br><br>
            <button type="submit" id="button2" name="login" class="button">Login</button>
        </form><br>
        <div class ="bottom-link">
            Not a member?
         <a href="registration.php" style="color:var(--orange); text-decoration:none;">Register</a>

    </div>
    
    
<script>
        // Replace '<?= $userChoices ?>' with the actual PHP variable containing the user's choices
        const userChoices = '<?= $userChoices ?>';

        // Analyze the user's choices and redirect them accordingly
        switch (userChoices) {
            case 'Ordinary level':
                window.location.href = 'Form4.php';
                break;
            case 'Advanced Level':
                window.location.href = 'Degree.php';
                break;
                 case 'Diploma level':
                window.location.href = 'Degree.php';
                break;
            // Add more cases for different choices
            default:
                // If no specific choice matches, redirect to a default page
                window.location.href = 'userlogin.php';
        }
    </script>
</body>
</html>

