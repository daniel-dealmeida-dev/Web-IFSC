<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Intervalo com span</title>
<style>.numero { color: blue; margin-right: 4px; }</style>
</head>
<body>
<form method="post">
    <label>Início: <input type="number" name="inicio"></label>
    <label>Fim: <input type="number" name="fim"></label>
    <button type="submit">Mostrar</button>
</form>

<?php
if (isset($_POST['inicio'], $_POST['fim'])) {
    $inicio = (int) $_POST['inicio'];
    $fim = (int) $_POST['fim'];
    if ($inicio <= $fim) {
        for ($i = $inicio; $i <= $fim; $i++) {
            echo "<span class=\"numero\">$i</span> ";
        }
    } else {
        echo "<p>Informe um intervalo válido.</p>";
    }
}
?>
</body>
</html>