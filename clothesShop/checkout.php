<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clothes Shop</title>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" type="text/css" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	 <div id="top"> <!-- top Begin -->
		<div class="container"> <!--container Begin -->
			<div class="col-md-6 offer"> <!--col-md-6 offer Begin -->
			
				<a href="" class="btn btn-success btn-sm">Welcome</a>
				<a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>
				
			</div> <!-- col-md-6 offer Finish -->
			<div class="col-md-6"> <!--col-md-6 Begin -->
			    <ul class="menu">
			        <li>
			            <a href="customer-register.php">Register</a>
			        </li>
			        <li>
			            <a href="checkout.php">My Account</a>
			        </li>
			        <li>
			            <a href="cart.php">Go To Cart</a>
			        </li>
			        <li>
			            <a href="checkout.php">Login</a>
			        </li>
			    </ul>
			</div> <!-- col-md-6 Finish -->
		</div> <!-- container Finish -->
	</div> <!-- top Finish -->
   
    <div id="navbar" class="navbar navbar-default"> <!-- navbar navbar-default Begin -->
        <div class="container"> <!-- container Begin -->   
            <div class="navbar-header"> <!-- navbar-header Begin -->
                  
                <a href="index.php" class="navbar-brand">
                    <img src="images/ecom-store-logo.png" alt="M-Dev-Store Logo" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="M-Dev-Store Logo Mobile" class="visible-xs">
                </a>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
                
            </div> <!-- navbar-header Finish -->
            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse Begin -->
                <div class="padding-nav"> <!-- padding-nav Begin -->
                    <ul class="nav navbar-nav left">
                        
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                        
                    </ul>
                </div> <!-- padding-nav Finish -->
                
                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items In Your Cart</span>
                </a>
                
                <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right Begin -->
                   
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    
                </div> <!-- navbar-collapse collapse right Finish -->
                <div class="collapse clearfix" id="search"> <!-- collapse clearfix Begin -->
                   
                    <form method="get" action="results.php" class="navbar-form"> <!-- navbar-form Begin -->
                        <div class="input-group"> <!-- input-group Begin -->
                            
                            <input type="text" class="form-control" placeholder="Search" name="user_query"  required>
                            
                            <span class="input-group-btn"> <!-- input-group-btn Begin -->
                                <button type="submit" name="search" value="Search" class="btn btn-primary"> <!-- btn btn-primary Begin -->
                                    <i class="fa fa-search"></i>
                                </button> <!-- btn btn-primary Finish -->
                            </span> <!-- input-group-btn Finish -->
                            
                        </div> <!-- input-group Finish -->
                    </form> <!-- navbar-form Finish -->
                    
                </div> <!-- collapse clearfix Finish -->
            </div> <!-- navbar-collapse collapse Finish -->
        </div> <!-- container Finish -->
    </div> <!-- navbar navbar-default Finish -->
    
    <div id="content"> <!-- content Begin -->
        <div class="container"> <!-- container Begin -->
            <div class="col-md-12"> <!-- col-md-12 Begin -->
                
                <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                    <li><a href="index.php">Home</a></li>
                    <li>My Account</li>
                </ul> <!-- breadcrumb Finish -->
                
            </div> <!-- col-md-12 Finish -->
            
            <div id="cart" class="col-md-9"> <!-- col-md-9 Begin -->
                <div class="box"> <!-- box Begin -->
                   
                    <form action="cart.php" method="post" enctype="multipart/form-data"> <!-- form Begin -->
                       
                        <h1>My Account</h1>
                        
                        <p class="text-muted">You currently have 3 item(s) in your cart</p>
                        
                        <div class="table-responsive"> <!-- table-responsive Begin -->
                            
                            <table class="table"> <!-- table Begin -->
                                
                                <thead> <!-- thead Begin -->
                                   
                                    <tr> <!-- thead Begin -->
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>
                                    </tr> <!-- tr Finish -->
                                    
                                </thead> <!-- thead Finish -->
                                
                                <tbody> <!-- tbody Begin -->
                                    
                                    <tr> <!-- tr Begin -->
                                        
                                        <td> <!-- td Begin -->
                                            <img class="img-responsive" src="admin_area/product_images/226-500x500.jpg" alt="Product 2">
                                        </td> <!-- td Finish -->
                                        
                                        <td>
                                            <a href="#">M-Dev Polo T-Shirt Men</a>
                                        </td>
                                        
                                        <td>
                                            2
                                        </td>
                                        
                                        <td>
                                            $55
                                        </td>
                                        
                                        <td>
                                            Large
                                        </td>
                                        
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        
                                        <td>
                                            $110
                                        </td>
                                        
                                    </tr> <!-- tr Finish -->
                                    
                                </tbody> <!-- tbody Finish -->
                                
                                <tbody> <!-- tbody Begin -->
                                    
                                    <tr> <!-- tr Begin -->
                                        
                                        <td> <!-- td Begin -->
                                            <img class="img-responsive" src="admin_area/product_images/grey jeans.jpg" alt="Product 2">
                                        </td> <!-- td Finish -->
                                        
                                        <td>
                                            <a href="#">M-Dev Man Jeans</a>
                                        </td>
                                        
                                        <td>
                                            2
                                        </td>
                                        
                                        <td>
                                            $45
                                        </td>
                                        
                                        <td>
                                            Large
                                        </td>
                                        
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        
                                        <td>
                                            $90
                                        </td>
                                        
                                    </tr> <!-- tr Finish -->
                                    
                                </tbody> <!-- tbody Finish -->
                                
                                <tbody> <!-- tbody Begin -->
                                    
                                    <tr> <!-- tr Begin -->
                                        
                                        <td> <!-- td Begin -->
                                            <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 2">
                                        </td> <!-- td Finish -->
                                        
                                        <td>
                                            <a href="#">M-Dev Woman Tank Top</a>
                                        </td>
                                        
                                        <td>
                                            2
                                        </td>
                                        
                                        <td>
                                            $50
                                        </td>
                                        
                                        <td>
                                            Large
                                        </td>
                                        
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        
                                        <td>
                                            $100
                                        </td>
                                        
                                    </tr> <!-- tr Finish -->
                                    
                                </tbody> <!-- tbody Finish -->
                                
                                <tfoot> <!-- tfoot Begin -->
                                    
                                    <tr> <!-- tr Begin -->
                                        
                                        <th colspan="5">Total</th>
                                        <th colspan="2">$100</th>
                                        
                                    </tr> <!-- tr Finish -->
                                    
                                </tfoot> <!-- tfoot Finish -->
                                
                            </table> <!-- table Finish -->
                            
                        </div> <!-- table-responsive Finish -->
                        
                        <div class="box-footer"> <!-- box-footer Begin -->
                            
                            <div class="pull-left"> <!-- pull-left Begin -->
                               
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                </a>
                                
                            </div> <!-- pull-left Finish -->
                            <div class="pull-right"> <!-- pull-right Begin -->
                               
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                    <i class="fa fa-refresh"></i> Update Cart
                                </button>
                                
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed Checkout <i class="fa fa-chevron-right"></i>
                                </a>
                                
                            </div> <!-- pull-right Finish -->
                            
                        </div> <!-- box-footer Finish -->
                        
                    </form> <!-- form Finish -->
                    
                </div><!-- box Finish -->
                
                
                
                <div id="row same-height-row"> <!-- #row same-height-row Begin -->
                    <div class="col-md-3 col-sm-6"> <!-- col-md-3 col-sm-6 Begin -->
                        <div class="box same-height headline"> <!-- box same-height headline Begin -->
                            <h3 class="text-center">Products You Maybe Like</h3>
                        </div> <!-- box same-height headline Finish -->
                    </div> <!-- col-md-3 col-sm-6 Finish -->
                    
                    <div class="col-md-3 col-sm-6 center-responsive"> <!-- col-md-3 col-sm-6 center-responsive Begin -->
                        <div class="product same-height"> <!-- product same-height Begin -->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="">
                            </a>
                            
                            <div class="text"> <!-- text Begin -->
                                <h3><a href="">M-Dev Tank Top Women</a></h3>
                                <p class="price">$40</p>
                            </div> <!-- text Finish -->
                            
                        </div> <!-- product same-height Finish -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive Finish -->
                    <div class="col-md-3 col-sm-6 center-responsive"> <!-- col-md-3 col-sm-6 center-responsive Begin -->
                        <div class="product same-height"> <!-- product same-height Begin -->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">
                            </a>
                            
                            <div class="text"> <!-- text Begin -->
                                <h3><a href="">M-Dev Street T-Shirt Women</a></h3>
                                <p class="price">$45</p>
                            </div> <!-- text Finish -->
                            
                        </div> <!-- product same-height Finish -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive Finish -->
                    <div class="col-md-3 col-sm-6 center-responsive"> <!-- col-md-3 col-sm-6 center-responsive Begin -->
                        <div class="product same-height"> <!-- product same-height Begin -->
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="">
                            </a>
                            
                            <div class="text"> <!-- text Begin -->
                                <h3><a href="">M-Dev Polo T-Shirt Women</a></h3>
                                <p class="price">$50</p>
                            </div> <!-- text Finish -->
                            
                        </div> <!-- product same-height Finish -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive Finish -->
                    
                </div> <!-- #row same-height-row Finish -->
                
                
                
            </div> <!-- col-md-9 Finish -->
            
            <div class="col-md-3"> <!-- col-md-3 Begin -->
                <div id="order-summary" class="box"> <!-- order-summary box Begin -->
                    <div class="box-header"> <!-- box-header Begin -->
                        <h3>Order Summary</h3> 
                    </div> <!-- box-header Finish -->
                    <div class="text-muted"> <!-- text-muted Begin -->
                        Shipping and additional costs are calculated based on  value you have entered.
                    </div> <!-- text-muted Finish -->
                    <div class="table-responsive"> <!-- table-responsive Begin -->
                        <table class="table">
                            <tbody> <!-- table Begin -->
                                <tr>
                                    <td>Order Sub-Total</td>
                                    <th>$200</th>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <td>$0</td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th>$0</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>$200</th>
                                </tr>
                            </tbody>
                        </table> <!-- table Finish -->
                    </div> <!-- table-responsive Finish -->
                </div> <!-- order-summary box Finish -->
            </div> <!-- col-md-3 Finish -->
            
        </div> <!-- container Finish -->
    </div> <!-- content Finish -->
    
   <?php 
    include("includes/footer.php");
    
    ?>
    
    
	<script type="text/javascript" src="js/jquery-331.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-337.min.js"></script>

</body>
</html>
