<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bachelor of science in software engineering</title>
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

        .pics {

            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;

            width: 105%;
            height: 800px;
            /* background-color: black; */
            margin-left: -10px;
            /* background-image: url(./assets/pch3.jpg); */
            background-size: cover;
            background-position-y: -150px;
            margin-right: -10px;
        }


        .picture-text {
            position: absolute;
            top: 40%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            left: 50%;
            transform: translate(-50%, -50%);
            /* background-color: rgba(0, 0, 0, 0.7); */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.178);
            padding: 20px;
            color: rgb(0, 0, 0);
            border-radius: 10px;
            max-width: 600px;
            height: 500px;
            overflow-y:scroll;
            justify-content: center;
            border-bottom: 10px solid var(--orange);
            border-top: 10px solid var(--orange);
            transition: .4s ease-in-out;

            z-index: 1;
        }

        .picture-text:hover {
            position: absolute;
            top: 40%;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            left: 50%;
            transform: translate(-50%, -50%);
            /* background-color: rgba(0, 0, 0, 0.7); */
            box-shadow: 0px 0px 1000px 1000px rgba(0, 0, 0, 0.3);
            padding: 20px;
            color: rgb(0, 0, 0);
            border-radius: 10px;
            max-width: 600px;
            justify-content: center;
            border-bottom: 10px solid var(--orange);
            border-top: 10px solid var(--orange);
            z-index: 11;
        }
    </style>
    <link rel="stylesheet" href="../client/css/navbar.css">
</head>

<body>
    <nav>
        <div class="logobrand" style="width:100% !important;text-align:center;">
            <h2 style="color:var(--primary);">Bachelor of science in software engineerings</h2>
        </div>
    </nav>
    <div class="container picture-text" style="margin-top:100px">
        <div class="combination-info">
            <h2>Bachelor of science in software engineering_description</h2>
            <?php
   include("conn.php");
   $sql="SELECT description
   FROM category
   WHERE category_id = '47'";
     $data=$conn->query($sql);
     $sql1="SELECT degree_req
     FROM degree
     WHERE degree_id ='205'";
       $data1=$conn->query($sql1);
       $sql2="SELECT degree_career
     FROM degree
     WHERE degree_id ='205'";
       $data2=$conn->query($sql2);
    
         $sql3="SELECT degree_institute
     FROM degree
     WHERE degree_id ='205'";
       $data3=$conn->query($sql3);
       ?>
        
           
<?php
while ($row = $data->fetch_assoc()) {
    echo  $row["description"]."<br>";
}
?>
        </div>
        <div class="combination-requirements">
            <h2>Bachelor of science in software engineering_requirements</h2>
            <?php
while ($row = $data1->fetch_assoc()) {
    echo  $row["degree_req"]."<br>";
}
?>
</div>
        <div class="combination-career">
            <h2>Bachelor of science in software engineering_institutes</h2>
            <?php
while ($row = $data3->fetch_assoc()) {
    echo  $row["degree_institute"]."<br>";
}
?>
</div>
<div class="diplo-career">
            <h2>Future_Career</h2>
            <?php
while ($row = $data2->fetch_assoc()) {
    echo  $row["degree_career"]."<br>";
}
    ?>
        </div>
        

</body>
</html>
