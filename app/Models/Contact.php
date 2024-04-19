<?php
require_once 'Database.php';

Class Contact{ 
    static function select(){
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
    static function insert($id, $phone_number, $owner, $users_id){
        global $conn;
        $sql = 'INSERT INTO contacts(id, phone_number, owner, users_id) VALUES (?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('issi', $id, $phone_number, $owner, $users_id);
        $stmt->execute();
    }
    static function update(){
  
    }
    static function delete(){
  
    }
  }

?>