<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can save the feedback data to a file, database, or perform other processing here.
    // For example, saving to a text file:
    $file = fopen("feedback.txt", "a"); // "a" for append mode
    fwrite($file, "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n");
    fclose($file);
}
?>
