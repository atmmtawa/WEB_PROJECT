<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Carrier Guidance Information System</title>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <div class="container">
        <div class="head">menu</div>
        <label for="check" id="check"></label>
        <span class="fas fa-times" id="times"></span>
        <span class="fas fa-bars" id="bars"></span>
        
        </div>
    <nav>
        <ul>
            <li><a href="NewForm4.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            
        </ul>
    </nav>
    <style>
        span{
            position: absolute;
            right: -40px;
            top: 30px;
            font-size: 30px;
            border-radius:3px;
            color: #fff;
            padding: 3px 8px;
            cursor: pointer;
            background: #000;
        }

        .bars{
            background:;
        }
        check:checked~.container{
            transform: translateX(0);
        }
        check:checked~. #bars{
            display:none;
        }
        .container{
            height: 100%;
            width: 250px;
            position:absolute;
            z-index: 1;
            transition: 0.5s ease;
            transform: translateX(0);
        }
        .container.head{
            background-color: #;
            font-size:30px;
            font-weight:bold;
        }
        body{
            background-color: lightblue !important;
        }
     header {
    background-color: ;
    color:;
    text-align: center;
    padding: 20px; 
    }
    h1{
        font-size:36px;
    }
    h2{
        font-size:24px;
        margin-top: 20px;
    }
    section{
        margin: 20px 0;
        padding: 20px;
        background-color:;
        border: 1px solid #;
        border-radius: 5px;
     }
    </style>
    <main>
        <section>
            <h2>Contact Information</h2>
            <p>If you have any questions or inquiries, feel free to reach out to us using the following contact details:</p>
            <address>
                Email: <a href="mailto:trendzhub5326@gmail.com">info@carrierguigance.com</a><br>
                Phone: 072342567<br>
                Address: 41218 iyumbu, Dodoma, Tanzania
            </address>
        </section>
        <section>
            <h2>Contact Form</h2>
            <form action="contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea><br>
                <input type="submit" value="Send">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Carrier Guidance Information System</p>
    </footer>
</body>
</html>