<?php
require_once './data.php';
include './header.php'; 

$contact = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');

    if (!empty($name)) {
        // Récupérer les contacts correspondant au nom
        $contact = getContactByName($name);

        if (!$contact) {
            $error = "Aucun contact trouvé avec le nom '$name'.";
        }
    } else {
        $error = "Veuillez entrer un nom valide.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher un Contact</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>

    <div class="container-search">
        <h1>Rechercher un Contact</h1>
        
        <form method="POST" action="search_contact.php" class="form-search">
            <label for="name">Nom du Contact :</label>
            <input type="text" name="name" id="name" required>
            <button type="submit">Rechercher</button>
        </form>

        <?php if (!empty($error)): ?>
            <p style="color: red;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        
        <?php if ($contact): ?>
            <div class="contact-info">
                <h2>Informations du Contact</h2>
                <ul>
                    <li><strong>ID :</strong> <?= htmlspecialchars($contact['id']) ?></li>
                    <li><strong>Nom :</strong> <?= htmlspecialchars($contact['name']) ?></li>
                    <li><strong>Email :</strong> <?= htmlspecialchars($contact['email']) ?></li>
                    <li><strong>Téléphone :</strong> <?= htmlspecialchars($contact['telephone']) ?></li>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <?php include './footer.php'; ?>
</body>
</html>
