<?php

$destiny = "xochitl.alonso@pcc.edu";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$choices = $_POST['choices'];
$question = $_POST['question'];
$contact = "Name: " . $nombre . "\nEmail: " . $correo . "\nSelect: " . $choices . "\nQuestion: " . $question;
mail($destiny,"contact", $contact);
header("Location:success_contact.html");

?>