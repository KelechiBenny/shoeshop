<?php include 'init.php' ; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<?php include DIR."/views/layouts/header.php" ?>
  </head>
<body>
<?php include DIR."/views/layouts/admin/nav.php" ?>
<!-- Header End====================================================================== -->
    <div id="mainBody">
        <div class="container">
              <div class="row">
                	<hr class="soften">
 <?php include DIR."/views/layouts/admin/aside.php" ?>               	
                

          
            
          <?php $orders = (new Controllers\OrderController)->index(); ?>

            <div class="span9">

            <table class="table table-bordered" style="max-width: 700px; margin-left: 40px;">
              <thead>
                  <tr>
                    <th>Customer Id</th>
                    <th>Shoe ID</th>
                    <th>Qauntity Ordered</th>
                    <th>Amount</th>
                    <th>Reference Number</th>
                    <th>Date Ordered</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($orders as $order): ?>
                <tr>
                  
                    <td><?= $order->user_id; ?></td>
                    <td><?= $order->shoe_id; ?></td>
                    <td><?= $order->qty_ordered; ?></td>
                    <td><?= $order->amount;?></td>
                    <td><?= $order->reference_number;?></td>
                    <td><?= $order->date_ordered;?></td>
                </tr>

              <?php endforeach;?>


              </tbody>
            </table>


 

          </div>




            </div>
        </div>
    </div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
</body>
</html>