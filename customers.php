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
          
          	
          <?php $users = (new Controllers\UserController)->index(); ?>

            <div class="span9">

            <table class="table table-bordered" style="max-width: 700px; margin-left: 40px;">
              <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                  
                    <td><?= $user->fullname; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= $user->phone; ?></td>
                    <td><?= $user->address;?></td>
                </tr>

              <?php endforeach;?>


              </tbody>
            </table>
 <?php $users = (new Controllers\UserController)->findOrder(2); //Pass in the User Id to find the orders associated with the User.
    echo '<ul>';
      foreach($users as $user){
        echo '<li>Reference Number: '.$user->reference_number .'</li><br>';
        echo '<li>User Id: '.$user->user_id .'</li><br>';
        echo '<li>Shoe Id: '.$user->shoe_id .'</li><br>';
        echo '<li>Quantity Ordered: '.$user->qty_ordered .'</li><br>';
        echo '<li>Amount: '.$user->amount.'<br>';
        echo '<li>Date Ordered: '.$user->date_ordered .'<br>';
      }
      echo '</ul>';
  ?>

          </div>





        </div>
      </div>
    </div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
</body>
</html>