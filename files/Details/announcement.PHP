<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: powderblue;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-family: "Helvetica Neue", sans-serif;

        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            border: 2px solid aquamarine;
            background-color: powderblue;
        }

        .news-item {
            margin-bottom: 20px;
            border: 1px solid aquamarine;
            padding: 20px;
            border-radius: 5px;
            transition: transform 0.2s;
        }

        .news-item:hover {
            transform: scale(1.02);
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
            border: 2px solid aquamarine;
        }

        .news-item h2 {
            margin: 0;
            color: aqua;
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
    <header>
        <h1>Latest News</h1>
    </header>
    <div class="container">
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
