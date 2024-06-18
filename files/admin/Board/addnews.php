<?php
include("conn.php");
$date = "";
$title = "";
$news = "";
    if (isset($_POST["submit"])) { 
$date = $_POST["date"]; 
$title = $_POST["title"]; 
$news = $_POST["content"]; 
 $errors = array();
if (empty($date) || empty($title) || empty($news)) {
        array_push($errors, "All fields are required");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
    $sql = "INSERT INTO news (date_of_uploaded, title, description_news)
            VALUES ('$date', '$title', '$news')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    }


$conn->close(); // Close the database connection
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin News Form</title>
    <style>
        body {
            /* font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; */
            background-color: white;
        }

        .container {
            max-width: 800px;
            margin: 200px auto;
             justify-content: center;
           /* align-items: center;
            justify-items: center;
            align-content: center; 
            text-align: center;*/
            margin-top: 90px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            background-color: white;
            
            border-bottom: 5px solid orange;
            border-top: 5px solid orange;
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }


        textarea {
            height: 50px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        label{
            font-weight: 100;
            font-family: segoe UI;
        }
        input,
        select,
        textarea {
            width: 90%;
            padding: 20px;
            box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
            margin: 5px 0;
            border: 1px solid whitesmoke;
            resize: none;
            outline: none;
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

        .flex {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add  News</h1>
        <form action="addnews.php" method="post" enctype="">
            <div class="form-group">
            <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple">Date:</div>
                <input type="date" id="date" name="date" required>
                <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple">Tittle</div>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
            <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple">content:</div>
                <textarea id="content" name="content" required></textarea>
            </div>

            <button type="submit" name="submit" id="button2">upload news</button>
        </form>
    </div>
</body>
</html>
