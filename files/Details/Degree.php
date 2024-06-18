<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="NewForm4.css">
    <title>Degree</title>

</head>

<body>
    <div class="menu">
        <h1 class="navbar"><span>Navigation</span>Bar.
            <!-- Add this button within your navigation bar -->

        </h1>

<p style="background-color: black; color: white; font-family: Arial, sans-serif;font-size: 30px;">Degree level</p>

        <ul>
            
            <li><a href="Degree.php">Home </a></li>
            <li><a href="about.php">About us </a></li>
            <li><a href="contact.php">Contact us </a></li>
           
        </ul>

    </div>
    <section class="pics">
        &nbsp;

        <div class="picture-text">
            <h1><b><i>Our Information To Guide You Around</i></b></h1><br><br>
            <p> "Our Career Guidance Information System is a powerful tool designed to empowerindividuals on their
                career journey with a rich repository of resources and insights. <br><br>Receive up-to-date information
                on job market demand, salary expectations, and skill requirements, ensuring you're well-prepared for
                your chosen career path. Connect with experienced mentors and professionals for valuable advice and
                networking opportunities.

                Whether you're a student planning your future, a professional considering a career change, or simply
                seeking to enhance your career prospects, our Career Guidance Information System is your trusted
                companion in navigating the ever-evolving world of work."<br><br> Follow through from the navigation bar
                to view different information on programs institue and the future career and for more informatuon please
                contact us <br><br>it is at our high hopes that the guidance and information provided will be at a
                greate help to you. </p>
        </div>

    </section>
    
    <div class="dashboard" id="dashboard">
        <div class="hamburger" onclick="toggleDashboard()">
            <i class="fas fa-bars"></i>
            
        </div>
        <ul>
            <div class="title">
                <h1 class="navbar"><span>Navigation</span>Bar.
                

                </h1>
            </div>
            <li class="dropping">
                <a><span>Origin</span><i class="fas fa-chevron-right icon_rotate" ></i></a>
                <ul style="display: none;">
                    <li><a href="Adv-degree.php">Advance level</a></li>
                    <li><a href="Diploma.html">Diploma level</a></li>
                </ul>
            </li>
            <li class="dropping">
                <a><span> Personal Information </span><i class="fas fa-chevron-right icon_rotate" ></i></a>
                <ul style="display: none;">
                    <li><a href="passwordconfirm.php">Change Password</a></li>
                    <li><a href="update.php">Update level of Education</a></li>
                </ul>
            </li>
            <li class="dropping">
                <a><span>All news</span><i class="fas fa-chevron-right icon_rotate" ></i></a>
                <ul style="display: none;">
                    <li><a href="allnews.php">Announcements</a></li>
                </ul>
                <li style="justify-content: right;"><a href="#"><i class="fas fa-lock" ></i>Log_out</a></li>
            </li>
            </li>
        </ul>
    </div>

    <script>function toggleDashboard() {
        var dashboard = document.getElementById("dashboard");
        if (dashboard.style.left === "0px" || dashboard.style.left === "") {
            dashboard.style.left = "-250px"; // Hide the dashboard
            document.querySelector(".hamburger").style.marginTop="10px";
        } else {
            dashboard.style.left = "0px"; // Show the dashboard
            document.querySelector(".hamburger").style.marginTop="40px";
        }
    }
    // function dropdown(){
    //     let drop_me = document.querySelector(".drop_me i");
    //     drop_me.className=".icon_.icon_rotate";
        
    // }
    </script>
</body>

</html>