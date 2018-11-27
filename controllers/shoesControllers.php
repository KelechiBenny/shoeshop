<?php
namespace Controllers;

use Models\Shoes;

class shoesControllers
{

    public function viewShoes()
    {
        // die('here');
        //(new Buy)->fees();
        $call = new Shoes;
        $result = $call->shoesQuery();

        if(is_array($result)){
        
            foreach($result as $value){
                echo "<li class='span3'>";
				echo "<div class='thumbnail'>";
				echo "<a  href='product_details.php?id=" . $value['Id'] . "'><img src='images/" . $value['Picture'] . "' alt=''/></a>";
				echo "<div class='caption'>";
                echo "<h5>Product name</h5>";
                $word = $value['Details'];
                $your_desired_width = 25;
                if (strlen($word) > $your_desired_width){
                    $word = wordwrap($word, $your_desired_width);
                    $word = substr($word, 0, strpos($word, "\n"));
                }
				echo "<p>" . $word . "<a href= 'product_details.php?id=". $value['Id'] ."'>....Read more.</a></p>";
					 
				echo "<h4 style='text-align:center'><a class='btn' href='product_details.php?id=". $value['Id']. "'> <i class='icon-zoom-in'></i></a> <a class='btn' href='#'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='product_details.php?id=" . $value['Id'] ."'>". $value['Price'] .  "</a></h4>";
				echo "</div>";
				echo "</div>";
				echo "</li>";
            }
        }
        else{
            echo $result;
        }
    }
    
    public function viewCategory()
    {

        //die("#100");
        $call = new Shoes;
        $result = $call->shoeCategories();

        if(is_array($result)){

            foreach ($result as $value) {
                # code...
                echo "<li><a href='products.php?id=". $value['Id']. "'><i class='icon-chevron-right'></i> " . $value['Name'] . "</a></li>";
               
            }
        }
    }

    public function viewCategorySelect()
    {
        $call = new Shoes;
        $result = $call->shoeCategories();

        if(is_array($result)){

            foreach ($result as $value) {

                echo "<option value='" .$value['Id'] . "'>". $value['Name'] . "</option>";
            }
        }
    }

    public function viewShoesLimit()
    {
        $call = new Shoes;
        $result = $call->shoeLimitView();

        if(is_array($result)){
        
            foreach($result as $value){
                echo "<li class='span3'>";
                echo "<div class='thumbnail'>";
                echo "<a  href='product_details.php?id=" . $value['Id'] . "'><img src='images/" . $value['Picture'] . "' alt=''/></a>";
                echo "<div class='caption'>";
                //echo "<h5>Product name</h5>";
                 
                //echo "<p>" . $value['Details'] . "</p>";
                echo "<h4><a class='btn' href='product_details.php?id=" . $value['Id'] . "'>VIEW</a> <span class='pull-right'> ". $value['Price'] . "</span></h4>";
                //echo "<h4 style='text-align:center'><a class='btn' href='product_details.php?id=". $value['Id']. "'> <i class='icon-zoom-in'></i></a> <a class='btn' href='#'>Add to <i class='icon-shopping-cart'></i></a> <a class='btn btn-primary' href='product_summary.php?id=" . $value['Id'] ."'>". $value['Price'] .  "</a></h4>";
                echo "</div>";
                echo "</div>";
                echo "</li>";
            }
        }
        else{
            echo $result;
        }
    }

    public function viewShoeDetails($id)
    {
        $call = new Shoes;
        $result = $call->shoesIndividualQuery($id);
        //var_dump($result);
        //if(is_array($result)){
        
            //foreach($result as $value){

            echo "<div id= 'gallery' class='span3'>";

            echo "<a href='images/ " . $result['Picture'] . "' title=''><img src='images/" . $result['Picture'] . "' style='width:100%'' alt=''/></a>";
            echo "</div>";
            echo "<div class='span6'>";
            echo "<h3></h3>";
             echo  "<h5>". $result['Date'] . "</h5>";
            echo   "<hr class='soft'/>";
            echo    "<form class='form-horizontal qtyFrm' action=''>";
            echo     "<div class='control-group'>";
            echo      "<label class='control-label'><span>#" .$result['Price'] . "</span></label>";
            echo        "<div class='controls'>";
            echo        "<input type='number' class='span1' placeholder='Qty.'/>";
            echo          "<button type='submit' class='btn btn-large btn-primary pull-right'> Add to cart <i class='icon-shopping-cart'></i></button>";
            echo        "</div></div></form>";
                
            echo    "<hr class='soft'/>";
            echo    "<h4>". $result['Quantity']. " items in stock</h4>";
            //echo    "<form class='form-horizontal qtyFrm pull-right'>";
            //echo      "<div class='control-group'>";
            echo        "<label class='control-label'><span>Color</span></label>";
            //echo    "<div class='controls'>"
            //echo        "<select class='span2'>";
            echo              "<p><b>" .$result['Color']. "</b></p>";
            // echo            "</select>";
            //echo       "</div></div></form>";
            echo    "<hr class='soft clr'/>";
            echo    "<p>". $result['Details']. "</p>";
            echo "<a class='btn btn-success btn-large' href='product_summary.php?id=" . $id . "'>Buy</a>";
                
                

           // }
        //}
       // else{
    //         echo $result;
    //     }

    }
}