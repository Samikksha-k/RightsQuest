<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "saujanya.karthik@gmail.com"; // Replace with your email address
    $subject = "Abuse Report"; // Email subject
    
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $inquiryType = $_POST["inquiryType"];
    $brand = $_POST["brand"];
    $comments = $_POST["comments"];
    
    // Build the email message
    $message = "First Name: $firstName\n";
    $message .= "Last Name: $lastName\n";
    $message .= "Email: $email\n";
    $message .= "Domain with Abuse: $url\n";
    $message .= "Inquiry Type: $inquiryType\n";
    $message .= "Brand: $brand\n";
    $message .= "Comments: $comments\n";
    
    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Success! Your report has been submitted.";
    } else {
        echo "Error: Unable to send the report. Please try again later.";
    }
}
?>
