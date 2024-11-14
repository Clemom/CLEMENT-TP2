<?php require_once("./header.php")?>
<?php require_once './data.php';
$contacts = getAllContacts();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <title>Gestion des Contacts</title>
</head>

<body>
    <nav></nav>
    <h1>Gestion des Contacts</h1>

    <h2>Ajouter un contact</h2>
    <form method="POST" action="add_contact.php">
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="telephone">Téléphone :</label>
            <input type="tel" name="telephone" id="telephone" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
        </div>
        <button type="submit">Ajouter</button>
    </form>

    <h2>Liste des contacts</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?= htmlspecialchars($contact['name']) ?></td>
                    <td><?= htmlspecialchars($contact['telephone']) ?></td>
                    <td><?= htmlspecialchars($contact['email']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $contact['id'] ?>">Modifier</a>
                        <a href="delete_contact.php?id=<?= $contact['id'] ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
<?php require_once("./footer.php");?>

</html>
