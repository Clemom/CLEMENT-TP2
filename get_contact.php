<?php
require_once './db.php';

/**
 * Récupérer un contact par nom
 * @param string $name Le nom du contact
 * @return array|null Les informations du contact ou null si non trouvé
 * @throws Exception Si aucun contact n'est trouvé
 */
function getContactByName($name) {
    $conn = connectDB();

    $query = $conn->prepare("SELECT * FROM contact WHERE name LIKE :name LIMIT 1");
    $query->bindValue(':name', '%' . $name . '%', PDO::PARAM_STR);
    $query->execute();

    $contact = $query->fetch(PDO::FETCH_ASSOC);

    if (!$contact) {
        throw new Exception("Aucun contact trouvé avec le nom '$name'.");
    }

    return $contact;
}

