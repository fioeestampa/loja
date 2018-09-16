 <?php foreach ($categories as $catego){?>

<!-- BREADCRUMBS -->
		<section class="breadcrumb women parallax margbot30">
			
			<!-- CONTAINER -->
			<div class="container">
				<h2><?php echo $catego['name']; ?></h2>
			</div><!-- //CONTAINER -->
		</section><!-- //BREADCRUMBS -->
		
		
		<!-- SHOP BLOCK -->
		<section class="shop">
			
			<!-- CONTAINER -->
			<div class="container">
			
				<!-- ROW -->
				<div class="row">
					
					<!-- SIDEBAR -->
					<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
						
						<!-- CATEGORIES -->
						<div class="sidepanel widget_categories">
							<h3>Product Categories</h3>
							<ul>
								<li><a href="javascript:void(0);" >Sweaters</a></li>
								<li><a href="javascript:void(0);" >SHIRTS &amp; TOPS</a></li>
								<li><a href="javascript:void(0);" >KNITS &amp; TEES</a></li>
								<li><a href="javascript:void(0);" >PANTS</a></li>
								<li><a href="javascript:void(0);" >DENIM</a></li>
								<li><a href="javascript:void(0);" >DRESSES</a></li>
								<li><a href="javascript:void(0);" >Maternity</a></li>
							</ul>
						</div><!-- //CATEGORIES -->
						
						<!-- PRICE RANGE -->
						<div class="sidepanel widget_pricefilter">
							<h3>Filter by price</h3>
							<div id="price-range" class="clearfix">
								<label for="amount">Range:</label>
								<input type="text" id="amount"/>
								<div class="padding-range"><div id="slider-range"></div></div>
							</div>
						</div><!-- //PRICE RANGE -->

						<!-- SHOP BY SIZE -->
						<div class="sidepanel widget_sized">
							<h3>SHOP BY SIZE</h3>
							<ul>
								<li><a class="sizeXS" href="javascript:void(0);" >XS</a></li>
								<li class="active"><a class="sizeS" href="javascript:void(0);" >S</a></li>
								<li><a class="sizeM" href="javascript:void(0);" >M</a></li>
								<li><a class="sizeL" href="javascript:void(0);" >L</a></li>
								<li><a class="sizeXL" href="javascript:void(0);" >XL</a></li>
							</ul>
						</div><!-- //SHOP BY SIZE -->
						
						<!-- SHOP BY COLOR -->
						<div class="sidepanel widget_color">
							<h3>SHOP BY COLOR</h3>
							<ul>
								<li><a class="color1" href="javascript:void(0);" ></a></li>
								<li class="active"><a class="color2" href="javascript:void(0);" ></a></li>
								<li><a class="color3" href="javascript:void(0);" ></a></li>
								<li><a class="color4" href="javascript:void(0);" ></a></li>
								<li><a class="color5" href="javascript:void(0);" ></a></li>
								<li><a class="color6" href="javascript:void(0);" ></a></li>
								<li><a class="color7" href="javascript:void(0);" ></a></li>
								<li><a class="color8" href="javascript:void(0);" ></a></li>
							</ul>
						</div><!-- //SHOP BY COLOR -->
						
						<!-- SHOP BY BRANDS -->
						<div class="sidepanel widget_brands">
							<h3>SHOP BY BRANDS</h3>
							<input type="checkbox" id="categorymanufacturer1" /><label for="categorymanufacturer1">VERSACE <span>(24)</span></label>
							<input type="checkbox" id="categorymanufacturer2" /><label for="categorymanufacturer2">J CREW <span>(35)</span></label>
							<input type="checkbox" id="categorymanufacturer3" /><label for="categorymanufacturer3">Calvin KlEin <span>(48)</span></label>
							<input type="checkbox" id="categorymanufacturer4" /><label for="categorymanufacturer4">Tommy hilfiger <span>(129)</span></label>
							<input type="checkbox" id="categorymanufacturer5" /><label for="categorymanufacturer5">Ralph Lauren <span>(69)</span></label>
						</div><!-- //SHOP BY BRANDS -->
						
						<!-- BANNERS WIDGET -->
						<div class="widget_banners">
							<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/images/tovar/banner10.jpg" alt="" /></a>
							<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/images/tovar/banner9.jpg" alt="" /></a>
							<a class="banner nobord margbot10" href="javascript:void(0);" ><img src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/images/tovar/banner8.jpg" alt="" /></a>
						</div><!-- //BANNERS WIDGET -->
						
						<!-- NEWSLETTER FORM WIDGET -->
						<div class="sidepanel widget_newsletter">
							<div class="newsletter_wrapper">
								<h3>NEWSLETTER</h3>
								<form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
									<input type="text" name="newsletter" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
									<input class="btn newsletter_btn" type="submit" value="Sign up & get 10% off">
								</form>
							</div>
						</div><!-- //NEWSLETTER FORM WIDGET -->
					</div><!-- //SIDEBAR -->
					
					
					<!-- SHOP PRODUCTS -->
					<div class="col-lg-9 col-sm-9 col-sm-9 padbot20">
						
						<!-- SHOP BANNER -->
						<div class="banner_block margbot15">
							<a class="banner nobord" href="javascript:void(0);" ><img src="<?php echo BASE_URL; ?>views/templates/ecommerce/<?php echo $this->cms_Settings['template']; ?>/images/tovar/banner21.jpg" alt="" /></a>
						</div><!-- //SHOP BANNER -->
						
						<!-- SORTING TOVAR PANEL -->
						<div class="sorting_options clearfix">
							
							<!-- COUNT TOVAR ITEMS -->
							<div class="count_tovar_items">
								<p>Sweaters</p>
								<span>194 Items</span>
							</div><!-- //COUNT TOVAR ITEMS -->
							
							<!-- TOVAR FILTER -->
							<div class="product_sort">
								<p>SORT BY</p>
								<select class="basic">
									<option value="">Popularity</option>
									<option>Reting</option>
									<option>Date</option>
								</select>
							</div><!-- //TOVAR FILTER -->
							
							<!-- PRODUC SIZE -->
							<div id="toggle-sizes">
								<a class="view_box active" href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
								<a class="view_full" href="javascript:void(0);"><i class="fa fa-th-list"></i></a>
							</div><!-- //PRODUC SIZE -->
						</div><!-- //SORTING TOVAR PANEL -->
						
						
    <!-- ROW -->
    <div class="row shop_block">    
<?php foreach($list as $product_item){ ?>
    <!-- TOVAR1 -->
    <div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
	<?php $this->loadView('product_item', $product_item); ?>
    </div>
    <!-- //TOVAR1 -->
 <?php } ?>
</div><!-- //ROW -->	
	
    
							
							
						
						
						<hr>
						
<div class="clearfix">
    <!-- PAGINATION -->
    
    <ul class="pagination">
	<?php for($q=1;$q<=$numberOfPages;$q++){ ?>
	<li<?php if($currentPage == $q){echo ' class="active"';} ?>><a href="<?php echo BASE_URL.$url; ?>?p=<?php echo $q; ?>"><?php echo $q; ?></a></li>
	<?php } ?>
	<li><a href="javascript:void(0);" >></a></li>
    </ul><!-- //PAGINATION -->
    						
    <a class="show_all_tovar" href="javascript:void(0);" >show all</a>
    
</div>
						
<hr>
						
						
						
						
					</div><!-- //SHOP PRODUCTS -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section>
		
 <?php } ?>