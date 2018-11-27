<?php
namespace Models;

class Shoes extends Connection
{
    public $conn;

    function __construct()
    {
        $this->conn = $this->getConnection();
    }
    
    public function shoesQuery()
    {
        $sql = "SELECT * from shoes";
        $result = $this->conn->query($sql);
        if($result->num_rows >= 1){
            $i = 0;
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $details = $row['description'];
                $size = $row['size'];
                $color = $row['color'];
                $price = $row['price'];
                $quantity = $row['quantity'];
                $date = $row['date_added'];
                $picture = $row['shoe_pic'];
                $category = $row['category_id'];
                $details_array[$i] = array('Id'=>$id, 'Details'=>$details, 'Size'=>$size, 'Color'=>$color, 'Price'=>$price, 'Quantity'=>$quantity, 'Date'=>$date, 'Picture'=>$picture, 'Category'=>$category);
                $i++;


            }
            return is_array($details_array) ? $details_array : false;
        }
        else{
            return "No Shoes available at the moment";
        }
    }


    public function shoesIndividualQuery($id)
    {

        $sql = "SELECT * from shoes where id = '$id'";
        $result = $this->conn->query($sql);
        if($result->num_rows == 1){
           // $i = 0;
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $details = $row['description'];
                $size = $row['size'];
                $color = $row['color'];
                $price = $row['price'];
                $quantity = $row['quantity'];
                $date = $row['date_added'];
                $picture = $row['shoe_pic'];
                $category = $row['category_id'];
                $details_array = array('Id'=>$id, 'Details'=>$details, 'Size'=>$size, 'Color'=>$color, 'Price'=>$price, 'Quantity'=>$quantity, 'Date'=>$date, 'Picture'=>$picture, 'Category'=>$category);
                //$i++;


            }
            return is_array($details_array) ? $details_array : false;
        }
        // else{
        //     return "No Shoes available at the moment";
        // }

    }

    public function shoeCategorys($id)
    {
        $sql = "SELECT * from shoes where category_id = '$id'";
        $result = $this->conn->query($sql);
        if($result->num_rows >= 1){
            $i = 0;
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $details = $row['description'];
                $size = $row['size'];
                $color = $row['color'];
                $price = $row['price'];
                $quantity = $row['quantity'];
                $date = $row['date_added'];
                $picture = $row['shoe_picture'];
                $category = $row['category_id'];
                $details_array[$i] = array('Id'=> $id, 'Details'=>$details, 'Size'=>$size, 'Color'=>$color, 'Price'=>$price, 'Quantity'=>$quantity, 'Date'=>$date, 'Picture'=>$picture, 'Category'=>$category);
                $i++;


            }
            return $details_array;
        }
    }

    public function shoecategories()
    {
        $sql = "SELECT * from categories";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows >= 1){
            $i = 0;
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $name = $row['name'];
                $details_array[$i] = array('Id'=>$id, 'Name'=>$name);
                $i++;

            }
            return is_array($details_array) ? $details_array : false;
        }
        else{
            return "<p> No Category Listed Yet </p>";
        } 
    }

    public function shoeLimitView()
    {

       $sql = "SELECT * from shoes LIMIT 4";
        $result = $this->conn->query($sql);
        if($result->num_rows >= 1){
            $i = 0;
            while($row = $result->fetch_assoc()){
                $id = $row['id'];
                $details = $row['description'];
                // $your_desired_width = 20;
                // if (strlen($details) > $your_desired_width){
                //     $details = wordwrap($details, $your_desired_width);
                //     $details = substr($details, 0, strpos($details, "\n"));
                // }
                $size = $row['size'];
                $color = $row['color'];
                $price = $row['price'];
                $quantity = $row['quantity'];
                $date = $row['date_added'];
                $picture = $row['shoe_pic'];
                $category = $row['category_id'];
                $details_array[$i] = array('Id'=>$id, 'Details'=>$details, 'Size'=>$size, 'Color'=>$color, 'Price'=>$price, 'Quantity'=>$quantity, 'Date'=>$date, 'Picture'=>$picture, 'Category'=>$category);
                $i++;


            }
            return is_array($details_array) ? $details_array : false;
        }
        else{
            return "No Shoes available at the moment";
        }

    }
}