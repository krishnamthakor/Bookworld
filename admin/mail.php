<?php
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Code to check the database for users who have issued a book and haven't returned it after 28 days
// Assuming you have a database connection established and $result contains the necessary user data

foreach ($result as $row) {
    $issuedDate = strtotime($row['issued_date']);
    $currentDate = time();
    $daysDifference = floor(($currentDate - $issuedDate) / (60 * 60 * 24)); // Calculate the difference in days

    if ($daysDifference >= 28) {
        $toEmail = $row['email']; // Recipient's email address
        $subject = 'Library Book Return Reminder';
        $message = 'Dear ' . $row['username'] . ",\n\nThis is a reminder that you have issued a book from the library. Please return it at your earliest convenience.\n\nThank you.";
        
        // Send email using PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com'; // Your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'your@example.com'; // Your SMTP username
        $mail->Password = 'your_password'; // Your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('your@example.com', 'Your Name');
        $mail->addAddress($toEmail);
        $mail->Subject = $subject;
        $mail->Body = $message;

        if ($mail->send()) {
            echo 'Email sent successfully to ' . $toEmail . '<br>';
        } else {
            echo 'Email could not be sent to ' . $toEmail . ': ' . $mail->ErrorInfo . '<br>';
        }
    }
}
?>
