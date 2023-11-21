<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate data (you can add more robust validation)
    if (empty($name) || empty($email) || empty($message) || empty($subject)) {
        echo "Please fill in all the fields.";
    } else {
        // Send an email (you can customize this part based on your requirements) 
        $headers = "From: $email";

        // You can customize the email message as per your needs
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Message:\n$message";

        // Use the mail() function to send the email
        if (mail('info@favourpointrealty.com', $subject, $email_message, $headers)) {
            echo "Thank you for your message. We will get back to you soon!";
        } else {
            echo "Oops! Something went wrong and we couldn't send your message.";
        }
    }
} else {
    // If the form is not submitted through POST method, redirect to the form page
    header("Location: index.html");  // Replace with the actual filename of your form page
    exit();
}
?>
