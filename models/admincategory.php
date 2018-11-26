<?php
namespace Models;

class AdminCategory extends Connection
{

    function __construct()
    {
        $this->conn = $this->getconnection();
    }

    public function checkifcategorynameforaddexist()
    {        
        
            $sql = "SELECT c.name FROM category c WHERE name='$category_name' ";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                $this->category_name_err = "this name already exists";
            }

            return
            [
                "cnex" => $this->category_name_err
            ];
        
    }

    public function addcategory()
    {
        $date_added = date('Y-m-d');
        $sql = "INSERT INTO categories (name,date_added) VALUES ('$category_name','$date_added') ";
        $result = $this->conn->query($sql);
    }

    public function updatecategory()
    {
        $sql = "UPDATE categories SET name='$new_category_name' date_added='$date_added' WHERE id='$id' ";
        $result = $this->conn->query($sql);
    }

    public function deletecategory()
    {
        $sql = "DELETE FROM categories WHERE id='$id' ";
        $result = $this->conn->query($sql);
    }

    public function viewcategory()
    {
        $sql = "SELECT c.id, c.name FROM cateogries c";
        $result = $this->conn->query($sql);
    }
}