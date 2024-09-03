<?php

$my_email = "quent789@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = trim($_POST['message']);

    $errors = [];

    if (empty($name)) {
        $errors['name'] = 'Name is required';
    }

    if (empty($surname)) {
        $errors['surname'] = 'Surname is required';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    if (empty($message)) {
        $errors['message'] = 'Message is required';
    }

    if (empty($errors)) {
        $email_subject = "Nouveau message du formulaire de contact";
        $email_body = "Email: $email, Nom: $name, Prénom: $surname, Message: $message";
        $headers = "From: $email";

        if (mail($my_email, $email_subject, $email_body, $headers)) {
            header('location: https://www.quentinlequeux.be/a-propos/');
        } else {
            $errors[] = 'Email not sent';
        }
    }
}