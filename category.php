<?php include 'init.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shoeshop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
		<meta name="author" content="">
		
		<?php include DIR."/views/layouts/header.php" ?>

  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
	<div class="span6">
	
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><img src="assets/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.html">Specials Offer</a></li>
	 <li class=""><a href="normal.html">Delivery</a></li>
	 <li class=""><a href="contact.html">Contact</a></li>
	 <li class="">
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-danger">Logout </span></a>
	
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		
			<div class="thumbnail">
				<img src="assets/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Dashboard</a> <span class="divider">/</span></li>
		<li class="active">Category</li>
    </ul>
	<h3> Category</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>ADD NEW CATEGORY</h5><br/>
			
			<form action="register.html">
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Enter your desired category name</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail0" name="category_name" placeholder="category name">
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block" name="add_category">add category</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>EXISTING CATEGORIES</h5>
			<table class="table">
				<th>id</th>
				<th>name</th>
				<tr>
					<td>1</td>
					<td>male</td>
				</tr>
				<tr>
					<td>2</td>
					<td>female</td>
				</tr>
			</table>
		</div>
		</div>
	</div>	
	<div class="row">
		<div class="span4">
			<div class="well">
				<h5>UPDATE CATEGORY</h5>

				<form action="register.html">
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Enter your desired new category name</label>
				<div class="controls">
					<select name="" id="" class="span3">
						<?php?>
					</select>
				</div>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail0" name="new_category_name" placeholder="new category name">
				</div>
			  </div>
			  <div class="controls">
				<input type="hidden" name="id" value="<?php?>">
			  <button type="submit" class="btn block" name="edit_category">update category</button>
			  </div>
			</form>

			</div>
		</div>
	</div>
</div>
		
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="assets/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="assets/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="assets/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; shoeshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="assets/js/jquery.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/google-code-prettify/prettify.js"></script>
	
	<script src="assets/js/bootshop.js"></script>
    <script src="assets/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="assets/switch/themeswitch.css" type="text/css" media="screen" />
<script src="assets/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="assets/css/#" name="bootshop"><img src="assets/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="assets/css/#" name="businessltd"><img src="assets/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="assets/css/#" name="amelia" title="Amelia"><img src="assets/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="spruce" title="Spruce"><img src="assets/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="assets/css/#" name="superhero" title="Superhero"><img src="assets/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="cyborg"><img src="assets/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="cerulean"><img src="assets/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="journal"><img src="assets/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="readable"><img src="assets/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="assets/css/#" name="simplex"><img src="assets/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="slate"><img src="assets/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="spacelab"><img src="assets/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="united"><img src="assets/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="assets/css/#" name="pattern1"><img src="assets/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="assets/css/#" name="pattern2"><img src="assets/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern3"><img src="assets/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern4"><img src="assets/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern5"><img src="assets/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern6"><img src="assets/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern7"><img src="assets/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern8"><img src="assets/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern9"><img src="assets/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern10"><img src="assets/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="assets/css/#" name="pattern11"><img src="assets/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern12"><img src="assets/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern13"><img src="assets/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern14"><img src="assets/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern15"><img src="assets/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="assets/css/#" name="pattern16"><img src="assets/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern17"><img src="assets/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern18"><img src="assets/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern19"><img src="assets/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="assets/css/#" name="pattern20"><img src="assets/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>