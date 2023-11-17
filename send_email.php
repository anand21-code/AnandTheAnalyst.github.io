<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "anandraop21@gmail.com";
    $subject = "New message from $name";
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
}
?>
