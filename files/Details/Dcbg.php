<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBG Combination</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .student-info {
            text-align: left;
            margin-bottom: 20px;
        }

        .student-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .student-info p {
            margin: 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>CBG Combination</h1>
    </div>
    <div class="container">
        <div class="combination-info">
            <h2>Combination_description</h2>
            <?php
   include("conn.php");
   $sql="SELECT description
   FROM category
   WHERE category_id = '81'";
     $data=$conn->query($sql);
     $sql1="SELECT Adv_requirements
     FROM form_four
     WHERE form_four_id ='302'";
       $data1=$conn->query($sql1);
       $sql2="SELECT future_career
     FROM form_four
     WHERE form_four_id ='302'";
       $data2=$conn->query($sql2);
        ?>
           
<?php
while ($row = $data->fetch_assoc()) {
    echo  $row["description"]."<br>";
}
?>
        </div>
        <div class="combination-requirements">
            <h2>Combination_requirements</h2>
            <?php
while ($row = $data1->fetch_assoc()) {
    echo  $row["Adv_requirements"]."<br>";
}
?>
        </div>
        <div class="combination-career">
            <h2>Future_Career</h2>
            <?php
while ($row = $data2->fetch_assoc()) {
    echo  $row["future_career"]."<br>";
}
    ?>
    </div>
</body>
</html>
