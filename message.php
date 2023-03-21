<?php
$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$mail = $_POST['user_email'];
$phone = $_POST['user_phone'];
$select = $_POST['sujet'];
$message = $_POST['user_message'];

echo 'Merci ' . $firstname . ' ' . $lastname . ' de nous avoir contacté à propos de ' . $select . '.' . "<br>" .
 
'Un de nos conseillers vous contactera soit à l\'adresse ' . ' ' . $mail . ' ' . ' ou par téléphone au ' . 
$phone .  ' dans les plus brefs delais pour traiter votre demande : ' . "<br>" .
 $message;
