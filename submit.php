<?php
require 'vendor/autoload.php';
include 'dbconnect.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use SendGrid\Mail\Mail;

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = htmlspecialchars($_POST['name']);
    $useremail = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $message = htmlspecialchars($_POST['userMessage']);

    if (empty($name) || empty($useremail) || empty($number) || empty($message)) {
        echo "<script>alert('All fields are required.'); window.history.back();</script>";
        exit();
    } elseif (!filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Please enter a valid email address.'); window.history.back();</script>";
        exit();
    } elseif (!preg_match('/^[0-9]{10}$/', $number)) {
        echo "<script>alert('Please enter a valid phone number (10 digits).'); window.history.back();</script>";
        exit();
    } else {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO visitors (name, email, number, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $useremail, $number, $message);
    
        // Execute the statement
        if ($stmt->execute()) {
            // Alert message for success and redirect to index.php
            echo "<script>alert('Your message has been received by Prajwol successfully.'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
        }
    
        // Close the statement
        $stmt->close();
    }

    // Send email using SendGrid API
    $email = new Mail();
    $email->setFrom($_ENV['SENDGRID_FROM_EMAIL'], 'Portfolio Contact Form');
    $email->setSubject('New Message from Contact Form');
    $email->addTo($_ENV['SENDGRID_TO_EMAIL'], 'Me');
    
    // Set the email body
    $email->addContent(
        "text/html", 
        "<strong>Name:</strong> {$name} <br>
         <strong>Email:</strong> {$useremail} <br>
         <strong>Message:</strong> {$message}"
    );
    
    // Initialize SendGrid
    $sendgrid = new \SendGrid($_ENV['SENDGRID_API_KEY']);
    
    try {
        $response = $sendgrid->send($email);
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage();
    }
}
?>
