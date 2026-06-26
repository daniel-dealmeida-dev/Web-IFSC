<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Sorteio</title></head>
<body>
<form method="get">
    <label>Min: <input type="number" name="min"></label>
    <label>Max: <input type="number" name="max"></label>
    <button type="submit">Sortear</button>
</form>

<?php
if (isset($_GET['min'], $_GET['max'])) {
    $min = (int) $_GET['min'];
    $max = (int) $_GET['max'];
    if ($min <= $max) {
        echo "<p>Número sorteado: " . rand($min, $max) . "</p>";
    } else {
        echo "<p>Informe um intervalo válido.</p>";
    }
}
?>
</body>
</html>