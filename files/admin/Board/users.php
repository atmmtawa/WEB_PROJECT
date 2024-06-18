</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Interface</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            
        }
        

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: orange;
        }

        .action-button {
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .deactivate-button {
            background-color: #ff4444;
            color: #fff;
            border: none;
        }

        .active-button {
            background-color: #44ff44;
            color: #fff;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1> All Registered Users</h1>
        
        <?php
        include("conn.php");
        $sql = "select * from clients";
        $data = $conn->query($sql);
        ?>

        <table>
            <tr>
                <th><b>Last_Name</b></th>
                <th><b>Email</b></th>
                <th><b>Date of Birth</b></th>
                <th><b>Phone Number</b></th>
                <th><b>Level of Education</b></th>
                <th><b>Password</b></th>
                <th><b>Action</b></th>
            </tr>
            
            <?php
            while ($row = $data->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["date_of_birth"] . "</td>";
                echo "<td>" . $row["phone_number"] . "</td>";
                echo "<td>" . $row["level_of_education"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "<td>";
                echo "<form method='post' action='users.php'>";
                echo "<input type='hidden' name='email' value='" . $row["email"] . "'>";
                echo "<button type='submit' name='remove' class='action-button deactivate-button'>Remove</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            <?php
include("conn.php");

if (isset($_POST['remove'])) {
    $email = $_POST['email'];

    // Create a SELECT query to retrieve the user's ID based on their email
    $select_query = "SELECT email FROM clients WHERE email = '$email'";
    $result = $conn->query($select_query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        // Create a DELETE query to remove the user by ID
        $delete_query = "DELETE FROM clients WHERE email = '$email'";

        if ($conn->query($delete_query) === TRUE) {
    echo "User removed successfully.";
    // Redirect back to the admin interface
    header("Location:users.php");
    exit();
} else {
    echo "Error deleting user: " . $conn->error;
}


        } else {
            echo "Error: " . $conn->error;
        }
    }



?>


        </table>
    </div>
    <a class="btn btn-primary" href="dashboard.php">Back Home</a>
</body>

</html>
