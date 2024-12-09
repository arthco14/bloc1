<?php
// Vérification si le formulaire a été soumis avec la méthode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les dimensions du tableau et les cellules fusionnées
    $rows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;
    $cols = isset($_POST['cols']) ? (int)$_POST['cols'] : 0;
    $merge_cells = isset($_POST['merge_cells']) ? $_POST['merge_cells'] : [];

    // Vérification des dimensions
    if ($rows > 0 && $cols > 0) {
        // Générer le tableau HTML
        echo "<table border='1' cellpadding='5' cellspacing='0'>";

        // Pour chaque ligne
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            
            // Pour chaque colonne
            for ($j = 0; $j < $cols; $j++) {
                // Vérifier si la cellule doit être fusionnée
                $merge_key = "$i,$j";  // La clé est basée sur les indices de la cellule
                if (in_array($merge_key, $merge_cells)) {
                    // Fusionner cette cellule (exemple : colspan et rowspan)
                    echo "<td colspan='2' rowspan='2'>Cellule fusionnée ($i, $j)</td>";
                    $j++; // On saute une colonne car elle est fusionnée
                } else {
                    // Sinon, afficher la cellule standard
                    echo "<td>Cellule ($i, $j)</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";

        // Afficher le code HTML du tableau dans un textarea pour le copier
        echo "<br><br>";
        echo "<textarea rows='10' cols='50' readonly>";

        // Re-générer le code du tableau dans le textarea
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                $merge_key = "$i,$j";  // Vérifier si cette cellule doit être fusionnée
                if (in_array($merge_key, $merge_cells)) {
                    echo "<td colspan='2' rowspan='2'>Cellule fusionnée ($i, $j)</td>";
                    $j++;  // Sauter une colonne
                } else {
                    echo "<td>Cellule ($i, $j)</td>";
                }
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

<!-- Formulaire HTML pour saisir les dimensions du tableau et les cellules fusionnées -->
<form method="POST" action="">
    <label for="rows">Nombre de lignes :</label>
    <input type="number" name="rows" id="rows" required min="1"><br><br>

    <label for="cols">Nombre de colonnes :</label>
    <input type="number" name="cols" id="cols" required min="1"><br><br>

    <label for="merge_cells">Cellules fusionnées (format ligne,colonne) :</label>
    <input type="text" name="merge_cells[]" id="merge_cells" placeholder="ex: 1,2"><br><br>

    <input type="submit" value="Générer le tableau">
</form>

