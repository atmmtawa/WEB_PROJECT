<!DOCTYPE html>
<html>

<head>
    <title>combination updation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <div class="registration-container">
            <h2 style="color:orange;text-align:center;text-transform:uppercase;">Combination_Update</h2>
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

            if (isset($_POST["submit"])) {
                $category = $_POST["category"];
                $combname = $_POST["Combination"];
                $combdes = $_POST["combination-description"];
                $combreq = $_POST["requirements"];
                $future = $_POST["future"];
                $errors = array();

                if (empty($category) || empty($combname) || empty($combdes) || empty($combreq) || empty($future)) {
                    array_push($errors, "All fields are required");
                } else {

                    $sql = "INSERT INTO category (category_name, Advn_comb, description)
        VALUES ('$category', '$combname', '$combdes')";
                    $sql1 = "INSERT INTO form_four (Adv_comb,Adv_requirements,future_career) VALUES ('$combname','$combreq','$future')";
                    if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
                        echo "New records created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                }
            }

            $conn->close(); // Close the database connection
            ?>
            <form action="combination.php" method="post" enctype="">
                <div class="form-group">
                <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple">Select_category:</div>
                    <select id="category" name="category" required>
                        <option value="science">Science</option>
                        <option value="arts">Arts</option>
                        <option value="business">Business</option>


                    </select>
                </div>

                <div class="flex">
                    <div class="form-group">
                        <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple">New Combination name:</div>
                        <textarea type="text" id="Combination" name="Combination" required></textarea>
                    </div>

                    <div class="form-group">
                    <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple"> Combination description:</div>
                        <textarea id="program-description" name="combination-description" required></textarea>
                    </div>

                </div>
                <div class="flex">
                    <div class="form-group">
                      <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple"> Combination requirements:</div>
                        <textarea id="requirements" name="requirements" required></textarea>
                    </div>
                    <div class="form-group">
                    <div style="text-align:start; !important;margin-left:10px; font-weight:200px;font-family:apple">Future Career</div>
                        <textarea id="requirements" name="future" required></textarea>
                    </div>
                </div>
                <div class="" style="text-align:center;">
                    
                <button type="submit" name="submit" id="button2">update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>