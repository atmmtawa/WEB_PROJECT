<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Rating and Suggestions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        select,
        textarea,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 150px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>System Rating and Suggestions</h1>
        <form action="feedback.php" method="post">
            <div class="form-group">
                <label for="rating">Rate the system:</label>
                <select id="rating" name="rating" required>
                    <option value="5">5 - Excellent</option>
                    <option value="4">4 - Very Good</option>
                    <option value="3">3 - Good</option>
                    <option value="2">2 - Fair</option>
                    <option value="1">1 - Poor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="suggestion">Your Suggestions:</label>
                <textarea id="suggestion" name="suggestion" placeholder="Enter your suggestions here" required></textarea>
            </div>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <?php
// Include your database connection here
include("conn.php");
$rating="";
$suggestion="";
if (isset($_POST["submit"])) { 
    $rating = $_POST["rating"];
    $suggestion = $_POST["suggestion"];
    $errors = array();
    if (empty($rating) || empty($suggestion)) {
        array_push($errors, "All fields are required");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
    // Insert feedback into the database
    $sql = "INSERT INTO admin (rating, suggetion) VALUES ('$rating','$suggestion')";
    if ($conn->query($sql) === TRUE) {
            echo "Suggestion sendc successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    

$conn->close(); // Close the database connection
?>

</body>
</html>
