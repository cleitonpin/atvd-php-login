<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    if ($email !== "cleiton.biou@gmail.com" && $password !== "1913961355") {
        header('Location: index.php?erro=1');
    };


    echo "<h1>Logado com sucesso!</h1>"
    
?>