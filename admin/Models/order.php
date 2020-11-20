<?php 
class Order extends Database 
{
    function get_list_all() {
        $sql = "SELECT * FROM view_orders";
        return $this->db_get_list($sql);
    }
    function get_order_byid($id) {
        $sql = "SELECT * FROM view_orders WHERE id = :id";
        $params = [
            "id" => $id
        ];
        return $this->db_get_row($sql,$params);
    }
    function get_order_detail($id) {
        $sql = "SELECT * FROM view_orderdetails WHERE order_id = :id";
        $params = [
            "id" => $id
        ];
        return $this->db_get_list_condition($sql,$params);
    }
    function update_orders($data) {
        $sql = "UPDATE orders SET 
        phone = :phone,
        email = :email,
        address = :address,
        status = :status
        WHERE id = :id";
        $params = [
            "phone" => $data['phone'],
            "email" => $data['email'],
            "address" => $data['address'],
            "status" => $data['status'],
            "id" => $data['id']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function update_detail($data) {
        $sql = "UPDATE orderdetails SET quantity = :quantity WHERE product_id = :product_id AND order_id = :order_id";
        $params = [
            "quantity" => $data['quantity'],
            "product_id" => $data['product_id'],
            "order_id" => $data['order_id']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }
    function delete_detail($data) {
        $sql = "DELETE FROM orderdetails WHERE product_id = :product_id AND order_id = :order_id";
        $params = [
            "product_id" => $data['product_id'],
            "order_id" => $data['order_id']
        ];
        if ($this->db_execute($sql, $params)) {
            return true;
        }
        else return false;
    }

}