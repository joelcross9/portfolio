<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Format the data for storage in the text file
    $data = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";

    // Append the data to the text file
    $file = 'form_submissions.txt';
    file_put_contents($file, $data, FILE_APPEND);

    // Redirect the user back to the form or a thank you page.
    header("Location: thank_you.html");
    exit();
}
?>
