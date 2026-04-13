<?php

$login = "bruno";
$senha = "112233";

if ($_POST["login"] == $login and $_POST["senha"] == $senha) {
    echo "login efetuado com sucesso!";
}
else {
    echo "Login ou senha inválidos!";
}

?>

