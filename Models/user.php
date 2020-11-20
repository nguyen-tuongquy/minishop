<?php 
class User extends Database 
{
    function get_list_all() {
        $sql = "SELECT * FROM users";
        return $this->db_get_list($sql);
    }
    function get_user_byid($id) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $params = [
            "id" => $id
        ];
        return $this->db_get_row($sql,$params);
    }
    function add_user($data) {
        $sql = "INSERT INTO users(username, fullname, password, image, type) 
        VALUES(:username, :fullname, :password, :image, :type)";
        $params = [
            "username" => $data['username'],
            "fullname" => $data['fullname'],
            "password" => $data['password'],
            "image" => $data['image'],
            "type" => $data['type']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function update_user($data) {
        $sql = "UPDATE users SET fullname = :fullname, password = :password, image = :image, type = :type WHERE id = :id";
        $params = [
            "fullname" => $data['fullname'],
            "password" => $data['password'],
            "image" => $data['image'],
            "type" => $data['type'],
            "id" => $data['id']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function delete_user($id) {
        $sql = "DELETE FROM users WHERE id = :id";
        $params = [
            "id" => $id
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
}