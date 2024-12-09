<?php
$message = isset($_GET['message']) ? $_GET['message'] : 'Message par défaut';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Message PHP</title>
</head>
<body>
    <p><?php echo htmlspecialchars($message); ?></p>
    <a href="?message=Bonjour%20le%20monde">Message 1</a> |
    <a href="?message=Comment%20ça%20va?">Message 2</a> |
    <a href="?message=A%20bientôt!">Message 3</a>
</body>
</html>
