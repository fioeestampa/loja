    <div class="tovar_item <?php if($sale >= 1){echo 'tovar_sale';} ?>" >
	<div class="tovar_img">
	    <div class="tovar_img_wrapper">
		<img class="img" src="<?php echo BASE_URL; ?>assets/media/products/<?php echo $images[0]['url']; ?>" alt="" />
		<img class="img_h" src="<?php echo BASE_URL; ?>assets/media/products/<?php echo $images[1]['url']; ?>" alt="" />
	    </div>
	    <div class="tovar_item_btns">
		<div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="!projects/women/1.html" >visualizar</a></div>
		<a class="add_bag" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i></a>
		<a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
		</div>
	</div>
	<div class="tovar_description clearfix">
	    <a class="tovar_title" href="product-page.html" ><?php echo mb_strimwidth($name, 0, 100, "..."); ?></a>
	    <span class="tovar_price">R$ <?php echo number_format($price, 2, ',', '.'); ?></span>
	</div>
    </div>