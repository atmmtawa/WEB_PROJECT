<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance | Dashboard</title>
    <link rel="stylesheet" href="../admin/Board/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./NewForm4.css">
    <link rel="stylesheet" href="../admin/Board/styles/dashboard.css">

</head>


<body>
<div class="top_nav">
        <!-- <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="career_logo">
                        <h2><span><i class="bi bi-book-half"></i></span><span> Career</span><span>Guidance</span></h2>
                    </div>
                </div>
                <div class="col-10 justify-end ">
                    <div class="col-3 input">
                        <input type="text" placeholder="Search Users">
                        <button class="bi bi-search"></button>
                    </div>
                </div>
            </div>
        </div> -->
        <?php include("nav2.php") ?>
    </div>
    <div class="dashboard grids" style="--grid-template:200px auto;">
        <div class="side_bar">
            <div class="career_logo">
                <h2><span><i class="bi bi-book-half"></i></span><span> Career</span><span>Guidance</span></h2>
            </div>
            <div class="list">
                <ul>
                    <li class="active"><a href="Form4.php"><i class="bi bi-buildings-fill"></i> Dashboard</a></li>
                    <li>
                        <a><i class="bi bi-card-heading"></i> Origin</a>
                        <ul class="nested_list">
                            <li><a href="../Details/Adv-degree.php"><i class="bi bi-calendar3-range"></i> Advanced_level</a></li>
                            <li><a href="../Details/4-diplo.php"><i class="bi bi-clipboard2-plus-fill"></i> Diploma_level</a></li>
                        </ul>

                    </li>
                    <li>
                        <a><i class="bi bi-card-heading"></i> Personal Information</a>
                        <ul class="nested_list">
                            <li><a href="passwordconfirm.php"><i class="bi bi-lockfill"></i> Change Password</a></li>
                            <li><a href="update.php"><i class="bi bi-clipboard2-plus-fill"></i> Update_education_level</a></li>
                        </ul>

                    </li>
                    <li>
                        <a><i class="bi bi-card-heading"></i> All News</a>
                        <ul class="nested_list">
                            <li><a href="../Details/announcement.php"><i class="bi bi-lockfill"></i> Announcement</a></li>     
                        </ul>

                    </li>
                    <li>
                        <a><i class="bi bi-card-heading"></i> Feedback</a>
                        <ul class="nested_list">
                            <li><a href="../Details/feedback.php"><i class="bi bi-lockfill"></i> Rate and suggestion</a></li>     
                        </ul>

                    </li>
                    <!-- <li>
                        <a><i class="bi bi-card-heading"></i>Update_Details </a>
                        <ul class="nested_list">
                            <li><a href="combination.html"><i class="bi bi-clipboard2-plus-fill"></i> Add
                                    combinations</a></li>
                            <li><a href="Diploma.html"><i class="bi bi-clipboard2-plus-fill"></i>
                                    Add_Diploma_Programs</a></li>
                            <li><a href="Degree.html"><i class="bi bi-clipboard2-plus-fill"></i> Add_Degree_Programs</a>
                            </li>

                        </ul>

                    </li> -->
                    <li><a href="userlogin.php"><i class="bi bi-box-arrow-in-left"></i> Log Out</a></li>
                </ul>
            </div>
        </div>
        <div class="main" style="overflow:hidden;">
            <div class="container">
                <!-- <div class="grids boxes" style="--grid-template:auto auto auto auto;">
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

                </div> -->
                <!-- <div class="grids boxes" style="--grid-template:auto ">
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
                        <a href="allnews.html" class="btn">See All</a>
                    </div>
                </div> -->
                <section class="pics">

                    &nbsp;

                    <div class="picture-text" style="margin-top:80px">
                        <h2><b>Our Information To Guide You.</b></h2><br><br>
                        <p> "Our Career Guidance Information System is a powerful tool designed to empowerindividuals on
                            their
                            career journey with a rich repository of resources and insights. <br><br>Receive up-to-date
                            information
                            on job market demand, salary expectations, and skill requirements, ensuring you're
                            well-prepared for
                            your chosen career path. Connect with experienced mentors and professionals for valuable
                            advice and
                            networking opportunities.

                            Whether you're a student planning your future, a professional considering a career change,
                            or simply
                            seeking to enhance your career prospects, our Career Guidance Information System is your
                            trusted
                            companion in navigating the ever-evolving world of work."<br><br> Follow through from the
                            navigation bar
                            to view different information on programs institue and the future career and for more
                            informatuon please
                            contact us <br><br>it is at our high hopes that the guidance and information provided will
                            be at a
                            greate help to you. </p>
                        
                    </div>

                </section>
            </div>
        </div>
    </div>
    <script src="../admin/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>