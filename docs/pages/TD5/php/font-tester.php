<?php
$message = isset($_GET['message']) ? $_GET['message'] : 'Erreur, aucun message spécifié';
$size = isset($_GET['size']) ? $_GET['size'] : 12;
$color = isset($_GET['color']) ? $_GET['color'] : 'black';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Font Tester</title>
</head>
<body>
    <div style="color: <?php echo htmlspecialchars($color); ?>; font-size: <?php echo htmlspecialchars($size); ?>px;">
        <?php echo htmlspecialchars($message); ?>
    </div>

    <p>
        <a href="?message=Message%201&size=15&color=red">Message en rouge (taille 15)</a><br>
        <a href="?message=Message%202&size=30&color=green">Message en vert (taille 30)</a><br>
        <a href="?message=Message%203&size=50&color=blue">Message en bleu (taille 50)</a>
    </p>

    <form method="GET">
        <label for="message">Message : </label><input type="text" name="message" id="message">
        <label for="size">Taille : </label><input type="number" name="size" id="size" value="<?php echo $size; ?>">
        <label for="color">Couleur : </label><input type="color" name="color" id="color" value="<?php echo $color; ?>">
        <button type="submit">Soumettre</button>
    </form>
</body>
</html>
