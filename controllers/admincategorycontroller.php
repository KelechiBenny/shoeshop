<?php
namespace controllers;

use Models\admincategory;

class AdminCategoryController
{
    public $id;
    public $category_name;
    public $new_category_name;
    public $category_name_err="";
    public $new_category_name_err="";

    public function checkemptyinputsforadd()
    {
        if(isset($_POST['add_category'])){
            $category_name=$_POST['category_name'];

            if(empty($category_name)){
                $this->category_name_err = "please fill a category name";
            }else{
                $this->category_name = $category_name;
            }

            return
            [
                "cn" => $this->category_name,
                "cnerr" => $this->category_name_err
            ];
        }
    }

    public function checkemptyinputforedit()
    {
        if(isset($_POST['edit_category'])){
            $id=$_POST['id'];
            $new_category_name=$_POST['new_category_name'];

            if(empty($new_category_name)){
                $this->category_name_err = "please fill a category name";
            }else{
                $this->new_category_name = $new_category_name;
            }

            return
            [
                "cn" => $this->new_category_name,
                "cnerr" => $this->new_category_name_err
            ];
        }
    }
}

$cat = new AdminCategory;


