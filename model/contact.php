<?php
include_once __DIR__ . '/../config/database.php';

class Contact
{
    static function getContacts($users_id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM contacts WHERE users_id = ?");
        $stmt->bind_param("i", $users_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $contacts = array();
        while ($row = $result->fetch_assoc()) {
            $contacts[] = $row;
        }
        $conn->close();
        return $contacts;
    }

    static function create($data=[])
    {
        extract($data);
        global $conn;
        $stmt = $conn->prepare("INSERT INTO contacts (phone_number, owner, users_id) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $phone_number, $owner, $users_id);
        $stmt->execute();
        return $conn->insert_id;
    }

    static function getById($id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM contacts WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    static function update($data=[])
    {
        global $conn;
        $phone_number = $data['phone_number'];
        $owner = $data['owner'];
        $users_id = $data['users_id'];
        $id = $data['id'];
        $stmt = $conn->prepare("UPDATE contacts SET phone_number = ?, owner = ?, users_id = ? WHERE id = ?");
        $stmt->bind_param("ssii", $phone_number, $owner, $users_id, $id);
        $stmt->execute();
        return $stmt->affected_rows;
    }

    static function delete($id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->affected_rows;
    }
    
    static function rawQuery($sql) {
        global $conn;
        $result = $conn->query($sql);
        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        $result->free();
        return $rows;
    }
}

// $contactModel = new Contact($conn);