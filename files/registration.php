
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/animated.css">
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

        .registration-container {
            position: relative;
            z-index: 3;
            width: 500px;
            margin: 20px auto;
            justify-content: center;
            text-align: center;
            align-items: center;
            align-content: center;
            justify-items: center;
            margin-top: 87px;
            border-radius: 10px;
            padding: 15px;
            /* border: 1px solid #ccc; */
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
            padding: 11px;
            margin: 5px 0;
            outline: none;
            border: none;
            color: var(--primary);
            background: none;
            background-color:rgba(0, 0, 0, 0.373);
            border-radius: 10px;
        }
        input::placeholder{
            color: var(--gray);
        }


        #button1 {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="shadow"></div>
    <?php include("nav.php") ?>
    <div class="registration-container">
        <h2 class="title">Register</h2>
        <?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "career_guidance";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["register"])) { 
    $FirstName = $_POST["first_name"]; 
    $MiddleName = $_POST["middle_name"]; 
    $LastName = $_POST["last_name"]; 
    $Email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $ConfirmPassword = $_POST["Confirm_password"]; 
    $gender = $_POST["gender"];
    $phoneNumber = $_POST["phone_number"]; 
    $level = $_POST["LevelOfEducation"]; 
    $Date_of_Birth = $_POST["date_of_birth"]; 
    $errors = array();

    if (empty($FirstName) || empty($LastName) || empty($Email) || empty($password) || empty($ConfirmPassword) || empty($gender) || empty($phoneNumber) || empty($level) || empty($Date_of_Birth)) {
        array_push($errors, "All fields are required");
    }
      // Validate First Name, Middle Name, and Last Name using regular expressions
    $nameRegex = "/^[A-Za-z]+$/";
    if (!preg_match($nameRegex, $FirstName)) {
        array_push($errors, "invalid first name.");
    }
    if (!empty($MiddleName) && !preg_match($nameRegex, $MiddleName)) {
        array_push($errors, "invalid middle name.");
    }
    if (!preg_match($nameRegex, $LastName)) {
        array_push($errors, "invalid lastname.");
    }
    $phoneRegex = "/^[0-9]/";
    if (!preg_match($phoneRegex, $phoneNumber)) {
        array_push($errors, "invalid phone number.");
    }
    

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }

    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }

    if ($password !== $ConfirmPassword) {
        array_push($errors, "Passwords do not match");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        //$hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

        $sql = "INSERT INTO clients (first_name, middle_name, last_name, email, phone_number, date_of_birth, gender, level_of_education, password)
            VALUES ('$FirstName', '$MiddleName', '$LastName', '$Email', '$phoneNumber', '$Date_of_Birth', '$gender', '$level', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close(); // Close the database connection
?>
        <form action="registration.php" method="post" enctype="">
            <input type="text" name="first_name" id="First Name" placeholder="First Name" required><br>
            <input type="text" name="middle_name" id="Middle Name" placeholder="Middle Name"><br>
            <input type="text" name="last_name" id="Last Name" placeholder="Last Name" required><br>
            <input type="email" name="email" id="Email" placeholder="Email" required><br>
        <input type="tel" name="phone_number" id="Phone Number" placeholder="Phone Number" oninput="validateIntegerInput(this)"required><br>
            <input type="date" name="date_of_birth" id="DOB" required><br>
            <select name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br>
            <select name="LevelOfEducation" id="levelOfEducation" required>
                <option value="Ordinary level">Ordinary level</option>
                <option value="Advanced Level">Advanced Level</option>
                <option value="Diploma Level">Diploma level</option>
            </select><br>
            <input type="password" name="password" id="password" placeholder="Password" required><br>
            <input type="password" name="Confirm password" id="Confirm password" placeholder="Confirm Password" required><br>
<button type="submit" id="button1" name="register" class="button">Register</button><br><br>
        </form>
        <div class="bottom-link" style="font-size:small;">
            Already registered?
            <a href="userlogin.php" style="color:var(--orange); text-decoration:none;">Login</a>
        </div>
    <p id="errorText" style="color: red;"></p>

  <script>
    function validateIntegerInput(inputElement) {
      // Remove any non-numeric characters from the input
      inputElement.value = inputElement.value.replace(/[^0-9]/g, '');

      // Display an error message if the input is empty
      const errorText = document.getElementById('errorText');
      if (inputElement.value === '') {
        errorText.textContent = 'Please enter a valid integer.';
      } else {
        errorText.textContent = '';
      }
    }
  </script>
</body>
</html>

