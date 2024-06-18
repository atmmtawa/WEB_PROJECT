<!DOCTYPE html>
<html>
<head>
  <title> About Us Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Add Font Awesome for icons -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.team-section {
  background-image: url("13.jpeg");
  filter: blur(0px);
  -webkit-filter: blur(0px);
  color: white;
  padding: 20px;
  border-radius: 10px;
  margin: 20px;
  position: relative;
}

.team-member {
  margin-bottom: 20px;
  width: calc(33.33% - 20px);
  float: left;
  margin-right: 20px;
  background: rgba(0,0,0,0.4);
  padding: 20px;
  border-radius: 10px;
  color: white;
}

.team-member h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.team-member p {
  font-size: 16px;
  margin: 5px 0;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("13.jpeg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgba(0,0,0, 0.4); /* Semi-transparent background */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

.footer {
  background-color: rgba(0,0,0, 0.4);
  color: white;
  padding: 20px;
  text-align: center;
  width: 100%;
  clear: both; /* Clear the float */
}

.footer a {
  color: white;
  text-decoration: none;
  margin: 0 10px;
  font-size: 24px;
}

.footer a:hover {
  color: #f1f1f1;
}
</style>
</head>
<body>
<div style="position: absolute; top: 10px; right: 10px; z-index: 4;">
  <a href="Main.php" style="color: white; text-decoration: none;">Go Back Home</a>
</div>

<div class="bg-image"></div>

<div class="bg-text">
    
  <h1 style="font-size:50px">About Us </h1>
  <p>Career Guidance website was developed by a team of young developers who aspires to become great in future through providing counselling to youth on selecting their best path to success.
  crucial to emphasize the significance of understanding an organization's values, mission, and culture. This section offers valuable insights that can greatly impact a person's career decisions.

  </p>
  <h2>Main Mission</h2>
  <p>
1."To bring inspiration and innovation to every student in the world."<br>

2."To empower every person and every student on the planet to achieve more and go beyond his/her deadline."<br>
3."To be Earth's most customer-centric company, where students can find and discover anything they might want to achieve and become in matters of education".
  </p>
  <h2> Team and Leadership saying. </h2>
  <p>
  "When your long-term goals are in alignment with the website mission, you're more likely to persevere through challenges and setbacks. This shared sense of purpose can provide the motivation needed to overcome obstacles and hence making an individual fulfill most of his/her aspiration and become a more successfull individual at the top".
  </p>

</div>
  <!-- Team Section -->
  <div class="team-section">
  <h2>Meet Our Team</h2><br>

  <!-- Team Member 1 -->
  <div class="team-member">
    <h3>Eric Mboya</h3>
    <p>Role: Team leader</p>
    <p>Email: mboyaeric74@gmail.com</p>
    <p>Phone: (255)675-933-663</p>
  </div>

  <!-- Team Member 2 -->
  <div class="team-member">
    <h3>Sabrina Rajab</h3>
    <p>Role: Assistant Team Leader</p>
    <p>Email: sabrinamselem2002@gmail.com</p>
    <p>Phone: (255)675-933-663</p>
  </div>

  <div class="team-member">
    <h3>Brayan Ngowi</h3>
    <p>Role: Designer</p>
    <p>Email: trendzhub5326@gmail.com</p>
    <p>Phone: (255)659-864-096</p>
  </div>

  <div class="team-member">
    <h3>Salmin Salmin</h3>
    <p>Role: Designer</p>
    <p>Email: @gmail.com</p>
    <p>Phone: (255)675-933-663</p>
  </div>

  <div class="team-member">
    <h3>Mbwana Ally</h3>
    <p>Role: Designer</p>
    <p>Email: tupambwana2002@gmail.com</p>
    <p>Phone: (255)659-050-359</p>
  </div>

  <div class="team-member">
    <h3>Hasnati Sadick</h3>
    <p>Role: Designer</p>
    <p>Email: 07145554zuu@gmail.com</p>
    <p>Phone: (255)714-555-405</p>
  </div>

  <div class="team-member">
    <h3>Ngasa Benjamin</h3>
    <p>Role: Designer</p>
    <p>Email: ngasabenjamin@gmail.com</p>
    <p>Phone: (255)717-343-606</p>
  </div>

  <div class="team-member">
    <h3>Asha Kizito</h3>
    <p>Role: Designer</p>
    <p>Email:ashakizito89@gmail.com</p>
    <p>Phone: (255)680-933-663</p>
  </div>

  <div class="team-member">
    <h3>Elizabeth Magili</h3>
    <p>Role: Database Developer</p>
    <p>Email: esmagili01@gmail.com</p>
    <p>Phone: (255)-627-947-278</p>
  </div>

  <div class="team-member">
    <h3>Richard Nhonya</h3>
    <p>Role: Database Developer</p>
    <p>Email: nhonyarichard23@gmail.com</p>
    <p>Phone: (255)716-086-017</p>
  </div>
  <!-- Add more team members as needed -->
</div>


<div class="footer">
  <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
  <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
  <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
  <p>&copy; 2023 Career Guidance. All Rights Reserved.</p>
  <p>Address: 123 Main Street, University of Dodoma, Dodoma, Tanzania</p>
  <p>Email: info@careerguidance.com</p>
  <p>Phone: +1 (555) 555-5555</p>
</div>

</body>
</html>
