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
                <div id="productMain" class="row"> <!-- row Begin -->
                    <div class="col-sm-6"> <!-- col-sm-6 Begin -->
                        <div id="mainImage"> <!-- mainImage Begin -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- carousel slide Begin -->
                                <ol class="carousel-indicators"> <!-- carousel-indicators Begin -->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol> <!-- carousel-indicators Finish -->
                                
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1"></center>
                                    </div>
                                </div>
                                
                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                
                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                
                            </div> <!-- carousel slide Finish -->
                        </div> <!-- mainImage Finish -->
                    </div> <!-- col-sm-6 Finish -->
                    
                    <div class="col-sm-6"> <!-- col-sm-6 Begin -->
                        <div class="box"> <!-- box Begin -->
                            <h1 class="text-center">M-Dev Polo Shirt Men</h1>
                            
                            <form action="details.php" class="form-horizontal" method="post"> <!-- form-horizontal Begin -->
                                <div class="form-group"> <!-- form-group Begin -->
                                    <label for="" class="col-md-5 control-label">Products Quantity</label>
                                    
                                    <div class="col-md-7"> <!-- col-md-7 Begin -->
                                        <select name="product_qty" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div> <!-- col-md-7 Finish -->
                                    
                                </div> <!-- form-group Finish -->
                                
                                <div class="form-group"> <!-- form-group Begin -->
                                    <label class="col-md-5 control-label">Product Size</label>
                                    
                                    <div class="col-md-7"> <!-- col-md-7 Begin -->
                                        <select name="product_size" id="" class="form-control">
                                            <option>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div> <!-- col-md-7 Finish -->
                                    
                                </div> <!-- form-group Finish -->
                                
                                <p class="price">$50</p>
                                
                                <p class="text-center buttons">
                                    <button class="btn btn-primary">
                                    <i class="fa fa-shopping-cart"> Add to Cart</i>
                                    </button>
                                </p>
                                
                            </form> <!-- form-horizontal Finish -->
                            
                        </div> <!-- box Finish -->
                        
                        <div class="row" id="thumbs"> <!-- row Begin -->
                           
                            <div class="col-xs-4"> <!-- col-xs-4 Begin -->
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"> <!-- thumb Begin -->
                                <img src="admin_area/product_images/product-1.jpg" alt="Product 1" class="img-responsive">
                                </a> <!-- thumb Finish -->
                            </div> <!-- col-xs-4 Finish -->
                            
                            <div class="col-xs-4"> <!-- col-xs-4 Begin -->
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"> <!-- thumb Begin -->
                                <img src="admin_area/product_images/product-2.jpg" alt="Product 2" class="img-responsive">
                                </a> <!-- thumb Finish -->
                            </div> <!-- col-xs-4 Finish -->
                            
                            <div class="col-xs-4"> <!-- col-xs-4 Begin -->
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"> <!-- thumb Begin -->
                                <img src="admin_area/product_images/product-1.jpg" alt="Product 1" class="img-responsive">
                                </a> <!-- thumb Finish -->
                            </div> <!-- col-xs-4 Finish -->
                            
                        </div> <!-- row Finish -->
                        
                    </div> <!-- col-sm-6 Finish -->
                    
                </div> <!-- row Finish -->
                
                <div class="box" id="details">
                    <h4>Product Details</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque hic, repellendus consequatur distinctio repellat unde? Fuga eius atque libero, minus, illum deserunt, quis voluptatum sed suscipit provident modi earum. Perspiciatis!
                    </p>
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>
                    <hr>
                </div>
                
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
                                <h3><a href="">M-Dev Man Jeans</a></h3>
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
                                <h3><a href="">M-Dev T-Shirt </a></h3>
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
                                <h3><a href="">M-Dev T-Shirt </a></h3>
                                <p class="price">45$</p>
                            </div> <!-- text Finish -->
                            
                        </div> <!-- product same-height Finish -->
                    </div> <!-- col-md-3 col-sm-6 center-responsive Finish -->
                    
                </div> <!-- #row same-height-row Finish -->
                
                
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