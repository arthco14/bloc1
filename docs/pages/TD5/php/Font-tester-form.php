<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['message'];
    $size = $_POST['size'];
    $color = $_POST['color'];
} else {
    $message = 'Message par défaut';
    $size = 12;
    $color = 'black';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Font Tester Form</title>
</head>
<body>
    <form method="POST">
        <label for="message">Message : </label><textarea name="message" id="message"><?php echo htmlspecialchars($message); ?></textarea><br>
        <label for="size">Taille : </label><input type="number" name="size" id="size" value="<?php echo htmlspecialchars($size); ?>"><br>
        <label for="color">Couleur : </label><input type="color" name="color" id="color" value="<?php echo htmlspecialchars($color); ?>"><br>
        <button type="submit">Soumettre</button>
    </form>

    <div style="color: <?php echo htmlspecialchars($color); ?>; font-size: <?php echo htmlspecialchars($size); ?>px;">
        <?php echo htmlspecialchars($message); ?>
    </div>
</body>
</html>
