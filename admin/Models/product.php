<?php
class Product extends Database 
{
    function get_list_all() {
        $sql = "SELECT * FROM view_products";
        return $this->db_get_list($sql);
    }
    function get_list_by_id($id) {
        $sql = "SELECT *
        FROM view_products WHERE id = :id";
        $params = [
            'id' => $id
        ];
        return $this->db_get_row($sql, $params);
    }
    function add_product($data) {
        $sql = "INSERT INTO products(name,subcate_id,in_stock,price,image) 
        VALUES(:name,:subcate_id,:in_stock,:price,:image)";
        $params = [
            "name" => $data['name'],
            "subcate_id" => $data['subcate_id'],
            "in_stock" => $data['in_stock'],
            "price" => $data['price'],
            "image" => $data['image']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function update_product($data) {
        $sql = "UPDATE products SET name=:name, subcate_id=:subcate_id, in_stock=:in_stock,
        price=:price,image=:image WHERE id=:id";
        $params = [
            "name" => $data['name'],
            "subcate_id" => $data['subcate_id'],
            "in_stock" => $data['in_stock'],
            "price" => $data['price'],
            "image" => $data['image'],
            "id" => $data['id']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function delete_product($id) {
        $sql = "DELETE FROM products WHERE id=:id";
        $params = [
            "id" => $id
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
}