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
                        
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
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
    
    <div class="container" id="slider"> <!-- container Begin -->
        
        <div class="col-md-12"> <!-- col-md-12 Begin -->
            
            <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!-- carousel slide Begin -->
                
                <ol class="carousel-indicators"> <!-- carousel-indicators Begin -->
                    
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    
                </ol> <!-- carousel-indicators Finish -->
                
                <div class="carousel-inner"> <!-- carousel-inner Begin -->
                    
                    <div class="item active">
                        <img src="admin_area/slides_images/image1.png" alt="Slider Image 1">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/image2.jpg" alt="Slider Image 2">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/image3.jpg" alt="Slider Image 3">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/image4.jpg" alt="Slider Image 4">
                    </div>
                    
                    
                </div> <!-- carousel-inner Finish -->
                
                <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel control Begin -->
                    
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    
                </a> <!-- left carousel control Finish -->
                
                <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- right carousel control Begin -->
                    
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                    
                </a> <!-- right carousel control Finish -->
                
            </div> <!-- carousel slide Finish -->
            
        </div> <!-- col-md-12 Finish -->
        
    </div> <!-- container Finish -->
    
    <div id="advantages"> <!-- advantages Begin -->
    
        <div class="container"> <!-- container Begin -->
            
            <div class="same-height-row"> <!-- same-height-row Begin -->
                
                <div class="col-sm-4"> <!-- col-sm-4 Begin -->
                    
                    <div class="box same-height"> <!-- box same-height Begin -->
                        
                        <div class="icon"> <!-- icon Begin -->
                            
                            <i class="fa fa-heart"></i>
                            
                        </div> <!-- icon Finish -->
                        
                        <h3><a href="#">Best Offer</a></h3>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div> <!-- box same-height Finish -->
                    
                </div> <!-- col-sm-4 Finish -->
                        
                 <div class="col-sm-4"> <!-- col-sm-4 Begin -->
                    
                    <div class="box same-height"> <!-- box same-height Begin -->
                        
                        <div class="icon"> <!-- icon Begin -->
                            
                            <i class="fa fa-tag"></i>
                            
                        </div> <!-- icon Finish -->
                        
                        <h3><a href="#">Best Prices</a></h3>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div> <!-- box same-height Finish -->
                    
                </div> <!-- col-sm-4 Finish -->
                        
                 <div class="col-sm-4"> <!-- col-sm-4 Begin -->
                    
                    <div class="box same-height"> <!-- box same-height Begin -->
                        
                        <div class="icon"> <!-- icon Begin -->
                            
                            <i class="fa fa-thumbs-up"></i>
                            
                        </div> <!-- icon Finish -->
                        
                        <h3><a href="#">100% original</a></h3>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div> <!-- box same-height Finish -->
                    
                </div> <!-- col-sm-4 Finish -->
                
            </div> <!-- same-height-row Finish -->
            
        </div> <!-- container Finish -->
                
    </div> <!-- advantages Finish -->
    
    <div id="hot"> <!-- hot Begin -->
       
        <div class="box"> <!-- box Begin -->
           
            <div class="container"> <!-- container Begin -->
               
                <div class="col-md-12"> <!-- col-md-12 Begin -->
                   
                    <h2>Our Latest Products</h2>
                    
                </div> <!-- col-md-12 Finish -->
                
            </div> <!-- container Finish -->
            
        </div> <!-- box Finish -->
        
    </div> <!-- hot Finish -->
    
    <div id="content" class="container"> <!-- container Begin -->
        
        <div class="row"> <!-- row Begin -->
            
            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
                
                <div class="product"> <!-- product Begin -->
                     
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                    </a>
                    
                    <div class="text"> <!-- text Begin -->
                       
                        <h3>
                        <a href="details.php">M-Dev Man T-Shirt</a>
                        </h3>     
                                           
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add to Cart</i>
                            </a>
                        </p>
                    </div> <!-- text Finish -->
                    
                </div> <!-- product Finish -->
                
            </div> <!-- col-sm-4 col-sm-6 single Finish -->
            
            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
                
                <div class="product"> <!-- product Begin -->
                     
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 2">
                    </a>
                    
                    <div class="text"> <!-- text Begin -->
                       
                        <h3>
                        <a href="details.php">M-Dev Man Jeans</a>
                        </h3>
                        
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add to Cart</i>
                            </a>
                        </p>
                    </div> <!-- text Finish -->
                    
                </div> <!-- product Finish -->
                
            </div> <!-- col-sm-4 col-sm-6 single Finish -->
            
            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
                
                <div class="product"> <!-- product Begin -->
                     
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                    </a>
                    
                    <div class="text"> <!-- text Begin -->
                       
                        <h3>
                        <a href="details.php">M-Dev Man T-Shirt</a>
                        </h3>
                        
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add to Cart</i>
                            </a>
                        </p>
                    </div> <!-- text Finish -->
                    
                </div> <!-- product Finish -->
                
            </div> <!-- col-sm-4 col-sm-6 single Finish -->
            
            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
                
                <div class="product"> <!-- product Begin -->
                     
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 2">
                    </a>
                    
                    <div class="text"> <!-- text Begin -->
                       
                        <h3>
                        <a href="details.php">M-Dev Man Jeans</a>
                        </h3>
                        
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add to Cart</i>
                            </a>
                        </p>
                    </div> <!-- text Finish -->
                    
                </div> <!-- product Finish -->
                
            </div> <!-- col-sm-4 col-sm-6 single Finish -->
            
            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
                
                <div class="product"> <!-- product Begin -->
                     
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                    </a>
                    
                    <div class="text"> <!-- text Begin -->
                       
                        <h3>
                        <a href="details.php">M-Dev Man T-Shirt</a>
                        </h3>     
                                           
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add to Cart</i>
                            </a>
                        </p>
                    </div> <!-- text Finish -->
                    
                </div> <!-- product Finish -->
                
            </div> <!-- col-sm-4 col-sm-6 single Finish -->
            
            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
                
                <div class="product"> <!-- product Begin -->
                     
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 2">
                    </a>
                    
                    <div class="text"> <!-- text Begin -->
                       
                        <h3>
                        <a href="details.php">M-Dev Man Jeans</a>
                        </h3>
                        
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add to Cart</i>
                            </a>
                        </p>
                    </div> <!-- text Finish -->
                    
                </div> <!-- product Finish -->
                
            </div> <!-- col-sm-4 col-sm-6 single Finish -->
            
            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
                
                <div class="product"> <!-- product Begin -->
                     
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                    </a>
                    
                    <div class="text"> <!-- text Begin -->
                       
                        <h3>
                        <a href="details.php">M-Dev Man T-Shirt</a>
                        </h3>
                        
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add to Cart</i>
                            </a>
                        </p>
                    </div> <!-- text Finish -->
                    
                </div> <!-- product Finish -->
                
            </div> <!-- col-sm-4 col-sm-6 single Finish -->
            
            <div class="col-sm-4 col-sm-6 single"> <!-- col-sm-4 col-sm-6 single Begin -->
                
                <div class="product"> <!-- product Begin -->
                     
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 2">
                    </a>
                    
                    <div class="text"> <!-- text Begin -->
                       
                        <h3>
                        <a href="details.php">M-Dev Man Jeans</a>
                        </h3>
                        
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">Add to Cart</i>
                            </a>
                        </p>
                    </div> <!-- text Finish -->
                    
                </div> <!-- product Finish -->
                
            </div> <!-- col-sm-4 col-sm-6 single Finish -->
            
            
        </div> <!-- row Finish -->
        
    </div> <!-- container Finish -->
    
    <?php 
    include("includes/footer.php");
    
    ?>
    
    
    
	<script type="text/javascript" src="js/jquery-331.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-337.min.js"></script>

</body>
</html>
