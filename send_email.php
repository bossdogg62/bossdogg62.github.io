<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "agentneguse@gmail.com";
    $subject = "New Form Submission from Nestshift Solutions";

    // Collect form data
    $message = "New submission details:\n\n";
    foreach ($_POST as $key => $value) {
        $message .= ucfirst(str_replace("_", " ", $key)) . ": " . htmlspecialchars($value) . "\n";
    }

    // Send email
    $headers = "From: no-reply@nestshiftsolutions.com";
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
