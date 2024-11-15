<?php
require_once './db.php';

/**
 * Ajoute un contact
 * @param string $name
 * @param string $email
 * @param string $telephone
 * @return bool
 */
function addContact(string $name,string $email,string $telephone) {
    $conn = connectDB();
    $query = $conn->prepare("INSERT INTO contact (name, email, telephone) VALUES (:name, :email, :telephone)");
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':telephone', $telephone);
    return $query->execute();
}

/**
 * Récupére tous les contacts
 * @return array
 */
function getAllContacts() {
    $conn = connectDB();
    $query = $conn->query("SELECT * FROM contact");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Supprimer un contact avec grâce à l'ID
 * @param int $id  
 * @return bool 
 */
function deleteContact(int $id) {
    $conn = connectDB();
    $query = $conn->prepare("DELETE FROM contact WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    return $query->execute();
}

/**
 * Mets à jour un contact
 * @param int $id
 * @param string $name 
 * @param string $email
 * @param string $telephone
 * @return bool
 */
function updateContact(int $id, string $name, string $email, string $telephone) {
    $conn = connectDB();
    $query = $conn->prepare("UPDATE contact SET name = :name, email = :email, telephone = :telephone WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':telephone', $telephone);
    return $query->execute();
}

/**
 * Récupére un contact avec le nom
 * @param string $name
 * @return array|null
 */
function getContactByName(string $name) {
    $conn = connectDB();

    $query = $conn->prepare("SELECT * FROM contact WHERE name LIKE :name LIMIT 1");
    $query->bindValue(':name', '%' . $name . '%', PDO::PARAM_STR);
    $query->execute();

    $contact = $query->fetch(PDO::FETCH_ASSOC);

    return $contact;
}


