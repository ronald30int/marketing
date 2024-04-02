<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ronald28int@gmail.com";
    $subject = "Reserva de Hostel - Hostel Bela Vista";
    
    $checkIn = $_POST["checkIn"];
    $checkOut = $_POST["checkOut"];
    $guests = $_POST["guests"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    $message = "Olá, gostaria de fazer uma reserva no Hostel Bela Vista com os seguintes detalhes:\n\n";
    $message .= "Data de Check-in: $checkIn\n";
    $message .= "Data de Check-out: $checkOut\n";
    $message .= "Número de hóspedes: $guests\n";
    $message .= "Nome: $name\n";
    $message .= "Email: $email\n";
    
    $headers = "From: $email\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Reserva enviada com sucesso!";
    } else {
        echo "Erro ao enviar a reserva.";
    }
}
?>
