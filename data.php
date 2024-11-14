<?php
require_once './db.php';

/**
 * Ajouter un contact dans la base de données
 * 
 * @param string $name Le nom du contact
 * @param string $email L'email du contact
 * @param string $telephone Le numéro de téléphone du contact
 * @return bool Succès ou échec de l'opération
 */
function addContact($name, $email, $telephone) {
    $conn = connectDB();
    $query = $conn->prepare("INSERT INTO contact (name, email, telephone) VALUES (:name, :email, :telephone)");
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':telephone', $telephone);
    return $query->execute();
}

/**
 * Récupérer tous les contacts
 * 
 * @return array Liste de tous les contacts
 */
function getAllContacts() {
    $conn = connectDB();
    $query = $conn->query("SELECT * FROM contact");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Supprimer un contact par ID
 * 
 * @param int $id L'ID du contact
 * @return bool Succès ou échec de la suppression
 */
function deleteContact($id) {
    $conn = connectDB();
    $query = $conn->prepare("DELETE FROM contact WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    return $query->execute();
}

/**
 * Mettre à jour un contact
 * 
 * @param int $id L'ID du contact
 * @param string $name Le nouveau nom du contact
 * @param string $email Le nouvel email du contact
 * @param string $telephone Le nouveau numéro de téléphone du contact
 * @return bool Succès ou échec de la mise à jour
 */
function updateContact($id, $name, $email, $telephone) {
    $conn = connectDB();
    $query = $conn->prepare("UPDATE contact SET name = :name, email = :email, telephone = :telephone WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':telephone', $telephone);
    return $query->execute();
}

/**
 * Récupérer un contact par ID
 * 
 * @param int $id L'ID du contact
 * @return array|null Les informations du contact ou null si non trouvé
 */
function getContact($id) {
    $conn = connectDB();
    $query = $conn->prepare("SELECT * FROM contact WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

