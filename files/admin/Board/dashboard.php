<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance | Dashboard</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/dashboard.css">
</head>

<body>
    <div class="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="career_logo">
                        <h2><span><i class="bi bi-book-half"></i></span><span> Career</span><span>Guidance</span></h2>
                    </div>
                </div>
                <!-- <div class="col-10 justify-end ">
                    <div class="col-3 input">
                        <input type="text" placeholder="Search Users">
                        <button class="bi bi-search"></button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="dashboard grids" style="--grid-template:200px auto;">
        <div class="side_bar">
            <div class="career_logo">
                <h2><span><i class="bi bi-book-half"></i></span><span> Career</span><span>Guidance</span></h2>
            </div>
            <div class="list">
                <ul>
                    <li class="active"><a href="dashboard.html"><i class="bi bi-buildings-fill"></i> Dashboard</a></li>
                    <li>
                        <a href="users.php"><i class="bi bi-people-fill"></i> Users</a>
                    </li>
                    <li>
                        <a><i class="bi bi-card-heading"></i> News</a>
                        <ul class="nested_list">
                            <li><a href="allnews.php"><i class="bi bi-calendar3-range"></i> All News</a></li>
                            <li><a href="addnews.php"><i class="bi bi-clipboard2-plus-fill"></i> Add News</a></li>
                            <li><a href="admin-email/index.php"><i class="bi bi-mailbox"></i>Email notification</a></li>
                        </ul>

                    </li>
                    <li>
                        <a><i class="bi bi-card-heading"></i>Update_Details </a>
                        <ul class="nested_list">
                            <li><a href="combination.php"><i class="bi bi-clipboard2-plus-fill"></i> Add combinations</a></li>
                            <li><a href="Diploma.php"><i class="bi bi-clipboard2-plus-fill"></i> Add_Diploma_Programs</a></li>
                            <li><a href="Degree.php"><i class="bi bi-clipboard2-plus-fill"></i> Add_Degree_Programs</a></li>
                            
                        </ul>

                    </li>
                    <li>
                        <a><i class="bi bi-card-heading"></i>Feedback</a>
                        <ul class="nested_list">
                            <li><a href="feedback.php"><i class="bi bi-person"></i>User responce</a></li>
                            
                        </ul>

                    </li>
                    <li><a href="adminlogin.php"><i class="bi bi-box-arrow-in-left"></i> Register Admin</a></li>
                    <li><a href="logout.php"><i class="bi bi-box-arrow-in-left"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <div class="grids boxes" style="--grid-template:auto auto auto auto;">
                    <div class="" style="--width:95%;--height:150px;">
                        <div class="headline">
                            <h3><span>Students</span></h3>
                            <h1><span>104</span></h1>
                        </div>
                    </div>
                    <div class="" style="--width:95%;--height:150px;">
                        <div class="headline">
                            <h3><span>Programs</span></h3>
                            <h1><span>32</span></h1>
                        </div>
                    </div>
                    <div class="" style="--width:95%;--height:150px;">
                        <div class="headline">
                            <h3><span>Combinations</span></h3>
                            <h1><span>54</span></h1>
                        </div>
                    </div>
                    <div class="" style="--width:95%;--height:150px;">
                        <div class="headline">
                            <h3><span>News</span></h3>
                            <h1><span>+94</span></h1>
                        </div>
                    </div>

                </div>
                <div class="grids boxes" style="--grid-template:auto ">
                    <div class="" style="--width:99%;--height:250px;">
                        <div class="grids" style="--grid-template:auto auto;gap: 10px;padding-right: 20px !important;">
                            <div class="news_card grids" style="--grid-template:50px auto; gap: 10px;">
                                <div class="news_img">
                                    <img src="../assets/health_check.png" alt="">
                                </div>
                                <div class="content" style="text-align: start;">
                                    <span>New Direction for Applicants</span><br>
                                    <span class="comment cut">New Direction for Applicants Lorem Ipsu...</span>
                                    
                                </div>
                            </div>
                            <div class="news_card grids" style="--grid-template:50px auto; gap: 10px;">
                                <div class="news_img">
                                    <img src="../assets/health_check.png" alt="">
                                </div>
                                <div class="content" style="text-align: start;">
                                    <span>New Direction for Applicants</span><br>
                                    <span class="comment cut">New Direction for Applicants Lorem Ipsu...</span>
                                    
                                </div>
                            </div>
                            <div class="news_card grids" style="--grid-template:50px auto; gap: 10px;">
                                <div class="news_img">
                                    <img src="../assets/health_check.png" alt="">
                                </div>
                                <div class="content" style="text-align: start;">
                                    <span>New Direction for Applicants</span><br>
                                    <span class="comment cut">New Direction for Applicants Lorem Ipsu...</span>
                                    
                                </div>
                            </div>
                            <div class="news_card grids" style="--grid-template:50px auto; gap: 10px;">
                                <div class="news_img">
                                    <img src="../assets/health_check.png" alt="">
                                </div>
                                <div class="content" style="text-align: start;">
                                    <span>New Direction for Applicants</span><br>
                                    <span class="comment cut">New Direction for Applicants Lorem Ipsu...</span>
                                    
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                    <!-- <div class="" style="--width:97%;--height:250px;">

                    </div> -->
                </div>

            </div>
        </div>

    </div>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    

</body>

</html>