<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Análise de String</title></head>
<body>
<form method="post">
    <label>Texto: <input type="text" name="texto"></label>
    <button type="submit">Analisar</button>
</form>

<?php
if (isset($_POST['texto'])) {
    $texto = trim($_POST['texto']);
    $limpo = strtolower(preg_replace('/[^a-z]/i', '', $texto));
    $tamanho = strlen($texto);
    $palindromo = ($limpo === strrev($limpo)) ? "Sim" : "Não";

    $vogais = 0;
    $consoantes = 0;
    foreach (str_split($limpo) as $letra) {
        if (in_array($letra, ['a','e','i','o','u'])) {
            $vogais++;
        } else {
            $consoantes++;
        }
    }

    echo "<p>Tamanho: $tamanho<br>";
    echo "Palíndromo: $palindromo<br>";
    echo "Vogais: $vogais<br>";
    echo "Consoantes: $consoantes</p>";
}
?>
</body>
</html>