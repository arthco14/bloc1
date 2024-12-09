<?php
// Si le formulaire a été soumis (méthode POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les valeurs du formulaire
    $rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0; // Nombre de lignes
    $cols = isset($_POST['cols']) ? (int)$_POST['cols'] : 0; // Nombre de colonnes

    // Vérification pour éviter de générer un tableau avec des dimensions nulles
    if ($rows > 0 && $cols > 0) {
        // Générer le tableau HTML
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                echo "<td>Cellule ($i, $j)</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Afficher le code HTML du tableau dans un textarea pour le copier
        echo "<br><br>";
        echo "<textarea rows='10' cols='50' readonly>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                echo "<td>Cellule ($i, $j)</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</textarea>";
    } else {
        echo "<p>Veuillez entrer des dimensions valides pour le tableau (plus de 0 pour les lignes et les colonnes).</p>";
    }
}
?>

<!-- Formulaire HTML pour saisir les dimensions du tableau -->
<form method="POST" action="">
    <label for="rows">Nombre de lignes :</label>
    <input type="number" name="rows" id="rows" required min="1"><br><br>

    <label for="cols">Nombre de colonnes :</label>
    <input type="number" name="cols" id="cols" required min="1"><br><br>

    <input type="submit" value="Générer le tableau">
</form>
