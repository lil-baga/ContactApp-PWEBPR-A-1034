<?php
require_once 'Database.php';

class Contact
{
    static function select()
    {
        global $conn;
        $sql = 'SELECT * FROM contacts';
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    
    static function insert($id, $phone_number, $owner, $users_id)
    {
        global $conn;
        $sql = 'INSERT INTO contacts(id, phone_number, owner, users_id) VALUES (?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('issi', $id, $phone_number, $owner, $users_id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        if ($result == true) {
            header("Location: index.php");
        } else {
            $error = "Error reading data: " . $conn->error;
            header("insert.php");
            return $error;
        }
    }

    static function update()
    {
        
    }

    static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM contacts WHERE id = ?";
        $result = $conn->prepare($sql);
        $result->bind_param('i', $id);

        if ($result->execute()) {
            $result->close();
            header("Location: index.php");
            exit();
        } else {
            $error = "Error deleting contact: " . $conn->error;
            $result->close();
            return $error;
        }
    }
    static function reset($id) //function untuk reset auto increment (belum terpakai)
    {
        global $conn;
        $sql = "ALTER TABLE contacts AUTO_INCREMENT = ?";
        $result = $conn->prepare($sql);
        $result->bind_param('i', $id);
        if ($result->execute()) {
            $result->close();
            header("Location: index.php");
            exit();
        } else {
            $error = "Error reseting id: " . $conn->error;
            $result->close();
            return $error;
        }
    }
}
