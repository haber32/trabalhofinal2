<?php

    if ($username === $usuario_correto && $password === $senha_correta) {
        // Se "lembrar" estiver marcado, define o cookie por 30 dias
        if ($remember) {
            setcookie("username", $username, time() + (86400 * 30), "/"); // 86400 = 1 dia
        } else {
            // Apaga o cookie, se existir
            setcookie("username", "", time() - 3600, "/");
        }
    }
?>
