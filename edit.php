<?php require_once("./header.php")?>
<?php require_once("./footer.php")?>
<?php
require_once './data.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID invalide ou non fourni");
}

$id = intval($_GET['id']);
$contact = getContactById($id);

if (!$contact) {
    die("Contact non trouvé");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un contact</title>
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-full-edit">
    <h1>Modifier un contact</h1>
    <div class="container-edit">
    <form method="POST" action="update_contact.php">
        <input type="hidden" name="id" value="<?= htmlspecialchars($contact['id']) ?>">
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($contact['name']) ?>" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($contact['email']) ?>" required>
        </div>
        <div>
            <label for="telephone">Téléphone :</label>
            <input type="tel" name="telephone" id="telephone" value="<?= htmlspecialchars($contact['telephone']) ?>" required>
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
    </div>
    </div>
</body>

</html>
