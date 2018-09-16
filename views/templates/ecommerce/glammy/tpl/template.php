<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title><?php echo $this->cms_Settings['site_title']; ?> - <?php echo $this->cms_Settings['site_desc']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/css/fancySelect.css" rel="stylesheet" media="screen, projection" />
	<link href="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/css/animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
</head>
<body>

<!-- PRELOADER -->
<div id="preloader"><img src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/images/preloader.gif" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- HEADER -->
		<header>
			
			<!-- TOP INFO -->
			<div class="top_info">
				
				<!-- CONTAINER -->
				<div class="container clearfix">
					<ul class="secondary_menu">
						<li><a href="my-account.html" ><?php $this->lang->get('MY_ACCOUNT'); ?></a></li>
						<li><a href="my-account.html" ><?php $this->lang->get('REGISTER'); ?></a></li>
					</ul>
					
					<div class="live_chat"><a href="javascript:void(0);" ><i class="fa fa-comment-o"></i> <?php $this->lang->get('LIVE_CHAT'); ?></a></div>
					
					<div class="phone_top"><?php $this->lang->get('WHATSAPP'); ?> <a href="<?php echo $this->cms_Settings['phone_number']; ?>" ><?php echo $this->cms_Settings['phone_number']; ?></a></div>
				</div><!-- //CONTAINER -->
			</div><!-- TOP INFO -->
			
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo">
						<a href="index.html" ><img src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/images/logo.png" alt="" /></a>
					</div><!-- //LOGO -->
					
					
					<!-- SEARCH FORM -->
					<div class="top_search_form">
						<a class="top_search_btn" href="javascript:void(0);" ><i class="fa fa-search"></i></a>
						<form method="get" action="#">
							<input type="text" name="search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					
					<!-- SHOPPING BAG -->
					<div class="shopping_bag">
						<a class="shopping_bag_btn" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i><p><?php $this->lang->get('SHOPPING_BAG'); ?></p><span>2</span></a>
						<div class="cart">
							<ul class="cart-items">
								<li class="clearfix">
									<img class="cart_item_product" src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/images/tovar/women/1.jpg" alt="" />
									<a href="product-page.html" class="cart_item_title">popover sweatshirt in floral jacquard</a>
									<span class="cart_item_price">1 × $98.00</span>
								</li>
								<li class="clearfix">
									<img class="cart_item_product" src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/images/tovar/women/3.jpg" alt="" />
									<a href="product-page.html" class="cart_item_title">japanese indigo denim jacket</a>
									<span class="cart_item_price">2 × $158.00</span>
								</li>
							</ul>
							<div class="cart_total">
								<div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>$414</b></span></div>
								<a class="btn active" href="checkout.html">Checkout</a>
							</div>
						</div>
					</div><!-- //SHOPPING BAG -->
					
					
					<!-- LOVE LIST -->
					<div class="love_list">
						<a class="love_list_btn" href="javascript:void(0);" ><i class="fa fa-heart-o"></i><p><?php $this->lang->get('LOVE_LIST'); ?></p><span>0</span></a>
						<div class="cart">
							<ul class="cart-items">
								<li>Cart is empty</li>
							</ul>
							<div class="cart_total">
								<div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>$0</b></span></div>
								<a class="btn active" href="checkout.html">Checkout</a>
							</div>
						</div>
					</div><!-- //LOVE LIST -->
					
					
					<!-- MENU -->
					 <?php $this->loadMenuPrincipal(); ?>
					<!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
		
	
		<!-- FOOTER -->
		<footer>
			
			<!-- CONTAINER -->
			<div class="container" data-animated='fadeInUp'>
				
				<!-- ROW -->
				<div class="row">
					
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
						<h4>Contacts</h4>
						<div class="foot_address"><span>Glammy Shop</span>55 Ney York 6515, Grand Tower</div>
						<div class="foot_phone"><a href="tel:1 800 888 2828" >1 800 888 2828</a></div>
						<div class="foot_mail"><a href="mailto:info@glamyshop.com" >info@glamyshop.com</a></div>
						<div class="foot_live_chat"><a href="javascript:void(0);" ><i class="fa fa-comment-o"></i> Live chat</a></div>
					</div>
					
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 col-ss-12 padbot30">
						<h4>Information</h4>
						<ul class="foot_menu">
							<li><a href="about.html" >About Us</a></li>
										<li><a href="gallery.html" >Gallery<span>new</span></a></li>
							<li><a href="javascript:void(0);" >Delivery</a></li>
							<li><a href="javascript:void(0);" >Privacy police</a></li>
							<li><a href="blog.html" >Blog</a></li>
							<li><a href="faq.html" >Faqs</a></li>
							<li><a href="contacts.html" >countact us</a></li>
						</ul>
					</div>
					
					<div class="respond_clear_480"></div>
					
					<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
						<h4>About shop</h4>
						<p>We ask for your name, telephone number, home address, email address and age for competitions, prize draws or newsletter sign ups. When a purchase is made on our site, in addition to the above, we also ask for delivery address, and payment method details.</p>
						<p>We may obtain information about your usage of our website to help us develop and improve it further through online surveys and other requests.</p>
					</div>
					
					<div class="respond_clear_768"></div>
					
					<div class="col-lg-4 col-md-4 padbot30">
						<h4>Newsletter</h4>
						<form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
							<input type="text" name="newsletter" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
							<input class="btn newsletter_btn" type="submit" value="SIGN UP">
						</form>
						
						<h4>we are in social networks</h4>
						<div class="social">
							<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-tumblr"></i></a>
							<a href="javascript:void(0);" ><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
			
			<!-- COPYRIGHT -->
			<div class="copyright">
				
				<!-- CONTAINER -->
				<div class="container clearfix">
					<div class="foot_logo"><a href="index.html" ><img src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/images/foot_logo.png" alt="" /></a></div>
					
					<div class="copyright_inf">
						<span>Glammy Shop© 2014</span> |
						<span>Theme by Anna Balashova</span> |
						<a class="back_top" href="javascript:void(0);" >Back to Top <i class="fa fa-angle-up"></i></a>
					</div>
				</div><!-- //CONTAINER -->
			</div><!-- //COPYRIGHT -->
		</footer><!-- //FOOTER -->
	</div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
	<div id="tovar_content"></div>
	<div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->

	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/js/jquery.sticky.js" type="text/javascript"></script>
	<script src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/js/parallax.js" type="text/javascript"></script>
	<script src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/js/fancySelect.js"></script>
	<script src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/js/animate.js" type="text/javascript"></script>
	<script src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/js/myscript.js" type="text/javascript"></script>
	<script>
		if (top != self) top.location.replace(self.location.href);
	</script>
	
</body>
</html>