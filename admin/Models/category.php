<?php
class category extends Database {
    function get_list_all() {
        $sql = "SELECT * FROM categories";
        return $this->db_get_list($sql);
    }
    function db_get_list_by_id($id) {
        $sql = "SELECT *
        FROM categories WHERE id = :id";
        $params = [
            'id' => $id
        ];
        return $this->db_get_row($sql, $params);
    }
    function add_category($data) {
        $sql = "INSERT INTO categories(name) values(:name)";
        $params = [
            "name" => $data['name']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function update_category($data) {
        $sql = "UPDATE categories SET name = :name WHERE id = :id";
        $params = [
            "name" => $data['name'],
            "id" => $data['id']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function delete_category($id) {
        $sql = "DELETE FROM categories WHERE id = :id";
        $params = [
            "id" => $id
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
}