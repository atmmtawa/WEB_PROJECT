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
    font-family: Arial, sans-serif;
    text-align: center;
    width: auto;
    background-color: lightblue;
    background-image: url('img2.jpg');

}
.login-container{
    width: 500px;
    margin: 200px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #8AA899;
}
input[type="email"],
input[type="password"],
select {
    width: 450px;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
}
#button2{
    height: 25px;
    width: 30%;
    background-color: white;
    border-radius: 3px;
    cursor: pointer;
}
#button2:hover{
    box: shadow 0.4s;
    background-color: lightblue;

}

        </style>
</head>
<body>

<div class="login-container">
<h2 style="color:blue" ><b>Login</b></h2>
        <form  action="userlogin.php" method="post" onsubmit="return validateLoginForm()">
       

            <label>Email:</label>
            <input type="email" name="email"  placeholder="Enter your email" required><br>
            <label>Password:</label>
            <input type="password" name="password"  placeholder="Enter your password" required><br><br>
            <button type="submit" id="button2" name="login">Login</button>
        </form><br>
        <div class ="bottom-link">
            Not a member?
        <a href="registration.php">Register</a>
    </div>
    <?php if(isset($loginError)) { echo $loginError; } ?>

    
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

