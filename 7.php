<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Soma com explode</title></head>
<body>
<form method="post">
    <label>Números (separados por vírgula): <input type="text" name="numeros"></label>
    <button type="submit">Somar</button>
</form>

<?php
if (isset($_POST['numeros'])) {
    $entrada = $_POST['numeros'];
    $itens = explode(',', $entrada);
    $soma = 0;
    foreach ($itens as $item) {
        $soma += (int) trim($item);
    }
    echo "<p>Soma: $soma</p>";
}
?>
</body>
</html>