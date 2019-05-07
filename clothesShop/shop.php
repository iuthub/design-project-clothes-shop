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
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
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
                
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Shop</li>
                </ul>
                
            </div> <!-- col-md-12 Finish -->
            
            <div class="col-md-3"> <!-- col-md-3 Begin -->
              
            <?php 
            include("includes/sidebar.php");
            ?>
            
            </div> <!-- col-md-3 Finish -->
            
            <div class="col-md-9"> <!-- col-md-9 Begin -->
                <div class="box"> <!-- box Begin -->
                    <h1>Shop</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, dignissimos vero non laboriosam veritatis, ipsum ut distinctio doloremque totam deserunt, molestias, eligendi maiores corporis repellendus exercitationem dicta quo temporibus necessitatibus.</p>
                </div> <!-- box Finish -->
                <div class="row"><!-- row Begin -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
                        <div class="product"> <!-- product Begin -->
                     
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                    
                            <div class="text"> <!-- text Begin -->
                       
                                <h3>
                                    <a href="details.php">M-Dev Woman T-Shirt</a>
                                </h3>     
                                           
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart"> Add to Cart</i>
                                    </a>
                                 </p>
                            </div> <!-- text Finish -->
                    
                        </div> <!-- product Finish -->
                   
                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
                        <div class="product"> <!-- product Begin -->
                     
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                    
                            <div class="text"> <!-- text Begin -->
                       
                                <h3>
                                    <a href="details.php">M-Dev Woman T-Shirt</a>
                                </h3>     
                                           
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart"> Add to Cart</i>
                                    </a>
                                 </p>
                            </div> <!-- text Finish -->
                    
                        </div> <!-- product Finish -->
                   
                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
                        <div class="product"> <!-- product Begin -->
                     
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                    
                            <div class="text"> <!-- text Begin -->
                       
                                <h3>
                                    <a href="details.php">M-Dev Woman T-Shirt</a>
                                </h3>     
                                           
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart"> Add to Cart</i>
                                    </a>
                                 </p>
                            </div> <!-- text Finish -->
                    
                        </div> <!-- product Finish -->
                   
                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
                        <div class="product"> <!-- product Begin -->
                     
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                    
                            <div class="text"> <!-- text Begin -->
                       
                                <h3>
                                    <a href="details.php">M-Dev Woman T-Shirt</a>
                                </h3>     
                                           
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart"> Add to Cart</i>
                                    </a>
                                 </p>
                            </div> <!-- text Finish -->
                    
                        </div> <!-- product Finish -->
                   
                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
                        <div class="product"> <!-- product Begin -->
                     
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                    
                            <div class="text"> <!-- text Begin -->
                       
                                <h3>
                                    <a href="details.php">M-Dev Woman T-Shirt</a>
                                </h3>     
                                           
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart"> Add to Cart</i>
                                    </a>
                                 </p>
                            </div> <!-- text Finish -->
                    
                        </div> <!-- product Finish -->
                   
                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->
                       
                        <div class="product"> <!-- product Begin -->
                     
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                            </a>
                    
                            <div class="text"> <!-- text Begin -->
                       
                                <h3>
                                    <a href="details.php">M-Dev Woman T-Shirt</a>
                                </h3>     
                                           
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart"> Add to Cart</i>
                                    </a>
                                 </p>
                            </div> <!-- text Finish -->
                    
                        </div> <!-- product Finish -->
                   
                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->
                </div><!-- row Finish -->
                
                <center>
                    <ul class="pagination">
                        <li><a href="#">First Page</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Last Page</a></li>
                    </ul>
                </center>
                
            </div> <!-- col-md-9 Finish -->
            
        </div> <!-- container Finish -->
    </div> <!-- content Finish -->
    
   <?php 
    include("includes/footer.php");
    
    ?>
    
    
    
	<script type="text/javascript" src="js/jquery-331.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-337.min.js"></script>

</body>
</html>
