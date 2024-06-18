<?php

// Include your database connection here
include("conn.php");

// Retrieve feedback from the database
$sql = "SELECT rating,suggetion FROM admin ORDER BY rating DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
    <!-- Include CSS and other head elements -->
    /* Reset some default browser styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Set a background color and font for the entire page */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

/* Center the content vertically and horizontally */
.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh; /* 100% of viewport height */
}

/* Style the heading */
h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

/* Style the table */
table {
    width: 80%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    position: absolute;
    top: 90px;
    left: 50px;
    transform: (50px 50px);
}

/* Style table header cells */
th {
    background-color:orange ;
    color: #fff;
    padding: 10px;
    text-align: left;
}

/* Style table data cells */
td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

/* Add hover effect to table rows */
tr:hover {
    background-color: #f0f0f0;
}
</style>
</head>
<body>
    <h1 style="text-align:center;padding:20px;">User Feedback</h1>
    <table>
        <tr>
            <th>Rating</th>
            <th>Suggestion</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["rating"] . "</td>";
            echo "<td>" . $row["suggetion"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
