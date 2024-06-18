<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'C:\PHPMailer\src\Exception.php';
require 'C:\PHPMailer\src\PHPMailer.php';
require 'C:\PHPMailer\src\SMTP.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'salmins351@gmail.com';
    $mail->Password = 'sfkernmhqjinrmxu';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('salmins351@gmail.com');
    
    // Fetch user emails from the database
    $dbHost = 'localhost';
    $dbName = 'career_guidance';
    $dbUser = 'root';
    $dbPass = '';
    
    $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $query = "SELECT email FROM clients";
    $statement = $connection->prepare($query);
    $statement->execute();
    $userEmails = $statement->fetchAll(PDO::FETCH_COLUMN);
    
    foreach ($userEmails as $email) {
        $mail->clearAddresses(); // Clear any previous recipients
        $mail->addAddress($email); // Add current user's email
        
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["message"];
        
        try {
            $mail->send();
            echo "Email sent to: $email<br>";
        } catch (Exception $e) {
            echo "Error sending email to $email: {$mail->ErrorInfo}<br>";
        }
    }
    
    echo "<script>
    alert('Sent Successfully'); 
    document.location.href='index.php';
    </script>";
}
?>