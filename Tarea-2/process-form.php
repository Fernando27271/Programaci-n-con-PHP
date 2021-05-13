<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $country = $_POST['country'];
    $sexo = $_POST['sexo'];
    $checkbox = $_POST['checkbox'];
    $formFile = $_POST['formFile'];
    $textarea = $_POST['textarea'];


    echo "Nombre de usuario: $username
    <br>Contraseña: $password
    <br>Lugar de residencia: $country
    <br>Sexo: $sexo.
    
    <br><br>$username ha publicado el siguiente archivo: $formFile
    <br>$username ha realizado el siguiente comentario: '$textarea'
    <br>$username $checkbox";
?>