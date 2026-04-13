<link rel="stylesheet" type="text/css" href="style.css">
<?php


$login = "bruno";
$senha = "112233";

if ($_POST["login"] == $login and $_POST["senha"] == $senha) {
    echo "<h4> seja bem-vindo(a), $login </h4>";
    header (header: "Refresh: 2; URL=formulas.html");
}
else {
    echo "<h4> Login ou senha invalidos! </h4>";
    header (header: "Refresh: 2; URL=index.html");
}

?>

