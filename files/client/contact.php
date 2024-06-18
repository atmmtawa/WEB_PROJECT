<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Carrier Guidance Information System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('19.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            filter: grayscale(100%); /* Convert the image to black and white */
        }

        header {
            background-color: transparent;
            color: white;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            color: white;
        }

        h2 {
            font-size: 24px;
            margin-top: 20px;
            color: white;
        }

      

        section {
            margin: 20px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            border: 1px solid white;
            border-radius: 5px;
            color: white;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            color: white;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            color: white;
        }

        nav li {
            margin-right: 20px;
            color: white;
        }

        nav a {
            text-decoration: none;
            font-weight: bold;
            color: white;
        }

        nav a:hover {
            text-decoration: underline;
            color: white;
        }
        /* Rating stars */
.star {
  cursor: pointer;
  font-size: 24px;
  color: #457d58;
  margin-right: 5px;
}
/* Add this style for the email link */
.email-link {
  color: #457d58; /* Set a different color for the email link */
  text-decoration: none; /* Remove the default underline */
  font-weight: bold; /* Add bold font weight */
  margin-top: 20px; /* Add some space between this and the preceding paragraph */
}

.email-link:hover {
  text-decoration: underline; /* Underline the link on hover */
}

/* Existing styles... */

/* Add these styles for the contact info */
.contact-info {
  font-weight: bold;
  color: Lightgreen; /* Set a different color for the label */
  margin-top: 20px; /* Add some space between this and the preceding paragraph */
}

.email-address {
  color: #457d58; /* Set a different color for the email address */
  font-weight: normal; /* Restore normal font weight */
}


.star:hover {
  color: #ffcc00;
}

/* User comment section */
.user-comment {
  margin-top: 20px;
}

textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  margin-top: 10px;
  padding: 8px 16px;
  background-color: #000;
  color: #457d58;
  border: none;
  cursor: pointer;
}

/* User feedback section */
.user-feedback {
  display: none;
  margin-top: 20px;
}

.user-feedback p {
  margin: 5px 0;
  font-weight: bold;
}


        form label {
            display: block;
            margin-top: 10px;
        }

        form input[type="text"],
        form input[type="email"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid white;
            border-radius: 3px;
            font-size: 16px;
        }

        form input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: white;
            color: black;
        }

        footer {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            color: white;
            padding-bottom: 10px;
             align-items: center;
            justify-items: center;
            align-content: center; 
            text-align: center;
            
        }
          footer p{
            margin-bottom: -10px;
          }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <nav>
        <div class="container">
            <ul>
                <li><a href="Main.php"><b>Home</b></a></li>
                <li><a href="abouts.php"><b>About</b></a></li>
            </ul>
        </div>
    </nav>
    <main>
        <section>
            <h2>Contact Information</h2>
            <p>If you have any questions or inquiries, feel free to reach out to us using the following contact details:</p>
            <address>
            <p class="contact-info">Email: <a href="mailto:info@careerguidance.com" class="email-link">info@careerguidance.com</a></p>


                Phone: +255 767 233 143<br><br>
                Address: 41218 Iyumbu, Dodoma, Tanzania
            </address>
        </section><br><br>
       <!-- <section>
            <h2>Contact Form</h2>
            <form action="process_contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <input type="submit" value="Send">
            </form>
        </section>
    </main>
    <div class="rating">
  <span class="star" data-star="1">☆</span>
  <span class="star" data-star="2">☆</span>
  <span class="star" data-star="3">☆</span>
  <span class="star" data-star="4">☆</span>
  <span class="star" data-star="5">☆</span>
</div>

<div class="user-comment">
  <textarea id="comment" placeholder="Leave a comment"></textarea>
  <button id="submit">Submit</button>
</div>

<div class="user-feedback">
  <p>Your rating: <span id="selected-rating">0</span> stars</p>
  <p>Your comment: <span id="entered-comment"></span></p>
</div>-->

    <footer>
        <p>&copy; 2023 Carrier Guidance Information System</p>
    </footer>
    <script>
   
</body>
</html>
