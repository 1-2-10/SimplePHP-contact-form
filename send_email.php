<?php
session_start(); // Start the session at the beginning of the script

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* 
    // Uncomment this section to verify CAPTCHA when needed
    $captchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = 'YOUR_SECRET_KEY_HERE'; // Replace with your actual Secret Key

    // Verify reCAPTCHA response
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captchaResponse");
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo "Please complete the CAPTCHA correctly.";
        exit;
    }
    */

    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $phone = htmlspecialchars($_POST['phone']); // Optional field
    $message = htmlspecialchars($_POST['message']);

    // Store in session variables with a prefix for clarity
    $_SESSION['contact_name'] = $name;
    $_SESSION['contact_email'] = $email;
    $_SESSION['contact_phone'] = $phone; // Optional
    $_SESSION['contact_subject'] = $subject;
    $_SESSION['contact_message'] = $message;

    // Set the recipient email address
    $to = 'contact@cyberfluence.com'; // Recipient email

    // Compose the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n"; // Include phone number
    $body .= "Subject: $subject\n";
    $body .= "Message:\n$message\n";

    // Define headers
    $headers = "From: $email\r\n"; // Sender's email
    $headers .= "Reply-To: $email\r\n"; // Reply-to address

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Successful email send: Redirect to confirmation page
        header("Location: ../contact_conf.php");
        exit(); // Prevent further code execution
    } else {
        // Failed to send email
        echo 'Unable to send email. Please reload the contact form and try again.';
        echo '<br><a href="contact.php">Reload Contact Form</a>';
    }
} else {
    echo "Invalid request.";
}
?>
