<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <style>
        body {
            /* font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; */
            background-color: white;
        }
        header{
               align-items: center;
            justify-items: center;
            align-content: center; 
            text-align: center;
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
            
            border-bottom: 5px solid black;
            border-top: 5px solid black;
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

        /* #button2:hover {
            box: shadow 0.4s;
            background-color: yellowgreen;

        } */

        .flex {
            display: grid;
            grid-template-columns: auto auto;
            gap: 10px;
        }
    

        .news-item {
            margin-bottom: 20px;
            border: 1px solid orange;
            padding: 20px;
            border-radius: 5px;
            transition: transform 0.2s;
        }

        .news-item:hover {
            transform: scale(1.02);
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
            border: 2px solid orange;
        }

        .news-item h2 {
            margin: 0;
            color:orange;
            font-size: 1.8rem;
            font-family: "Helvetica Neue", sans-serif;
        }

        .news-item p {
            color: black;
            margin: 10px 0;
            font-family: "Arial", sans-serif;
        }
    </style>
</head>
<body>

            
    <div class="container">
    <h2 style="color:black;text-align:center;text-transform:uppercase;">latest_News</h2>
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

        $sql = "SELECT title, date_of_uploaded, description_news FROM news ORDER BY date_of_uploaded DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="news-item">';
                echo '<h2>' . $row['title'] . '</h2>';
                echo '<p>Date: ' . $row['date_of_uploaded'] . '</p>';
                echo '<p>' . $row['description_news'] . '</p>';
                echo '</div>';
            }
        } else {
            echo 'No news articles available.';
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
