<?php
class Subcategory extends Database 
{
    function get_list_all() {
        $sql = "SELECT * FROM subcategories";
        return $this->db_get_list($sql);
    }
    function get_list_all_from_view_cate_subcate() {
        $sql = "SELECT * FROM view_cate_subcate";
        return $this->db_get_list($sql);
    }
    function get_list_from_view_cate_subcate_byid($id) {
        $sql = "SELECT * FROM view_cate_subcate where id = :id";
        $params = [
            "id" => $id
        ];
        return $this->db_get_row($sql, $params);
    }
    function db_get_list_by_id($id) {
        $sql = "SELECT *
        FROM subcategories WHERE id = :id";
        $params = [
            'id' => $id
        ];
        return $this->db_get_row($sql, $params);
    }
    function get_list_by_cateid($id) {
        $sql = "SELECT *
        FROM subcategories WHERE cate_id =:cate_id";
        $params = [
            "cate_id" => $id
        ];
        return $this->db_get_list_condition($sql, $params);
    }
    function add_subcategory($data) {
        $sql = "INSERT INTO subcategories(name,cate_id) values(:name,:cate_id)";
        $params = [
            "name" => $data['name'],
            "cate_id" => $data['cate_id']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function update_subcategory($data) {
        $sql = "UPDATE subcategories SET name = :name, cate_id = :cate_id WHERE id = :id";
        $params = [
            "name" => $data['name'],
            "id" => $data['id'],
            "cate_id" => $data['cate_id']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function delete_subcategory($id) {
        $sql = "DELETE FROM subcategories WHERE id = :id";
        $params = [
            "id" => $id
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
}
