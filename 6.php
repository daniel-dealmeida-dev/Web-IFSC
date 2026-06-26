<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Tabuada</title></head>
<body>
<form method="post">
    <label>Número: <input type="number" name="tabuada"></label>
    <button type="submit">Mostrar tabuada</button>
</form>

<?php
if (isset($_POST['tabuada'])) {
    $n = (int) $_POST['tabuada'];
    for ($i = 1; $i <= 10; $i++) {
        echo "<p>$n x $i = " . ($n * $i) . "</p>";
    }
}
?>
</body>
</html>