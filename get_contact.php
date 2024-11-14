<?php
require_once './db.php';

function getContact($id) {
    $conn = connectDB();

    $query = $conn->prepare("SELECT * FROM contact WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $contact = $query->fetch(PDO::FETCH_ASSOC);

    if (!$contact) {
        throw new Exception("Contact non trouvé");
    }

    return $contact;
}

