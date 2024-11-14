<?php
require_once './data.php';

$contact = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id'] ?? 0);

    if ($id > 0) {
        // Récupérer le contact par ID
        $contact = getContact($id);

        if (!$contact) {
            $error = "Aucun contact trouvé avec l'ID $id.";
        }
    } else {
        $error = "Veuillez entrer un ID valide.";
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
    <?php include './header.php'; ?>

    <div class="container">
        <h1>Rechercher un Contact</h1>
        
        <form method="POST" action="search_contact.php">
            <label for="id">ID du Contact :</label>
            <input type="number" name="id" id="id" required>
            <button type="submit">Rechercher</button>
        </form>

        <?php if (!empty($error)): ?>
            <p style="color: red;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        
        <?php if ($contact): ?>
            <h2>Informations du Contact</h2>
            <ul>
                <li><strong>ID :</strong> <?= htmlspecialchars($contact['id']) ?></li>
                <li><strong>Nom :</strong> <?= htmlspecialchars($contact['name']) ?></li>
                <li><strong>Email :</strong> <?= htmlspecialchars($contact['email']) ?></li>
                <li><strong>Téléphone :</strong> <?= htmlspecialchars($contact['telephone']) ?></li>
            </ul>
        <?php endif; ?>
    </div>

    <?php include './footer.php'; ?>
</body>
</html>
