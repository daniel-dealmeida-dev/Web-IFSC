<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Par ou Ímpar</title></head>
<body>
<form method="post">
    <label>Número: <input type="number" name="numero"></label>
    <button type="submit">Verificar</button>
</form>

<?php
if (isset($_POST['numero'])) {
    $numero = (int) $_POST['numero'];
    $resultado = ($numero % 2 === 0) ? "Par" : "Ímpar";
    echo "<p>Número: $numero<br>Resultado: $resultado</p>";
}
?>
</body>
</html>