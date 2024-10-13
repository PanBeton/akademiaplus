<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie danych z formularza
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Wysłanie e-maila do siebie
    $to = "marcin@akademiaplus.eu"; // Zmień na swój adres e-mail
    $headers = "From: $email";
    $body = "Imię: $name\nE-mail: $email\nTemat: $subject\nWiadomość:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Błąd: nie udało się wysłać wiadomości.";
    }
}
?>