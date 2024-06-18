<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CARRIER GUIDANCE</title>
    <link rel="stylesheet" href="css/animated.css">
    <style>
        body {
            background-image: url(./assets/pang-yuhao-_kd5cxwZOK4-unsplash.jpg);
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-position-y:-220px ;
            background-attachment: fixed;
            
        }
        .menus ul li:nth-child(1) a{
            color: var(--primary);
            font-weight: 500;
            text-transform: uppercase;
        } 

    </style>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="preLoade">
        <div class="loade"></div>
    </div>
    <div class="container">
        <?php include("nav.php") ?>
        <div class="shadow"></div>
        <div class="content center-full">
            <h1 class="animate__animated animate__fadeInUp animate__duration-5s animate__delay-2s">Welcome to Carrier Guidance</h1>
            <div class="mini-container animate__animated animate__fadeInUp animate__duration-5s animate__delay-3s">
            <p>"Carrier Guidance" refers to a service or program designed to assist individuals in making informed decisions and choices about their career paths and professional development. This guidance typically includes a range of resources and support, such as counseling, assessments, and advice, to help individuals explore career options, identify their strengths and interests, set career goals, and develop the skills and strategies needed to achieve success in their chosen field. Carrier guidance aims to empower individuals to make well-informed decisions about their careers, whether they are just starting out, seeking a career change, or looking to advance in their current profession.</p>
            <!-- <span> It plays a crucial role in helping people navigate the complex and dynamic world of work and achieve their professional aspirations.</span> -->

            <div class="btn">
                <a href="registration.php" class="button">Start Now</a>
            </div>
            </div>

    </div>
    <script>
        setTimeout(() => {
            document.querySelector(".preLoade").className="hide";
            document.querySelector(".loade").className="hide";
            setTimeout(() => {
                document.querySelector(".preLoade").style.display="none !important";
                document.querySelector(".loade").style.display="none !important";
                
            }, 1000);
        }, 3000);
    </script>
</body>
</html>
