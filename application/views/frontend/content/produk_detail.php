<section class="page_breadcrumbs ds background_cover section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1>Detail Produk</h1>
							<ol class="breadcrumb darklinks">
								<li> <a href="<?php echo base_url(); ?>">
							Home
						</a> </li>
								<li> Detail </li>
								<li class="active"><a href="<?php echo base_url(); ?>katalog/detail/<?php echo $detail->slug; ?>"> <span><?php echo $detail->title; ?></span></a> </li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30">
				<div class="container">
					<div class="row">

						<div class="col-xs-12 col-md-8 col-lg-8 col-md-push-4 col-lg-push-4">
								<input type="hidden" name="slug" value="<?php echo $detail->slug; ?>">
							<div itemscope="" itemtype="http://schema.org/Product" class="product type-product row columns_padding_30 columns_margin_bottom_30">
								<div class="col-sm-6">
									<div class="images text-center"> <a href="<?php echo base_url(); ?>assets/images/<?= $detail->gambar; ?>" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
					            <img src="<?php echo base_url(); ?>assets/images/<?= $detail->gambar; ?>" class="attachment-shop_single wp-post-image" alt="" title="">
					        </a> </div>
									<!--eof .images -->
									<div class="thumbnails-wrap">
										<div id="product-thumbnails" class="owl-carousel thumbnails product-thumbnails" data-margin="10" data-nav="false" data-dots="true" data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="2" data-responsive-xxs="2">
										<a href="<?php echo base_url(); ?>assets/images/<?= $detail->gambar; ?>" class="zoom first" title="" data-gal="prettyPhoto[product-gallery]">
					                <img src="<?php echo base_url(); ?>assets/images/<?= $detail->gambar; ?>" class="attachment-shop_thumbnail" alt="">
					         
                                </a> </div>
									</div>
									<!-- eof .images -->
								</div>
								<div class="summary entry-summary col-sm-6">
									<h1 itemprop="name" class="product_title"><?= $detail->title;  ?></h1>
									<span class="price">
									<?php
                                                        $harga = $detail->harga;
                                                        $diskon_persen = $detail->diskon;
                                                       
                                                        if($diskon_persen == 0){
                                                        echo '<span class="amount">'.'Rp' .number_format($harga,2,",",".") . '</span>';
                                                         } else { 
                                                        $i = $harga * $diskon_persen/100;
                                                        $a = $harga - $i;

                                                        echo '<span style="text-decoration: line-through red;">'.'Rp' .number_format($harga,2,",",".") . '</span>'.'<br>';
                                                        echo $diskon_persen.'%'.'&nbspOFF'.'<br>';
                                               
                                                        echo '<span class="amount" style="color:black;">'.'Rp' .number_format($a,2,",",".") . '</span> ';
                                                         } 
                             						?>
                             					</span>
									
									<form class="cart" method="post" enctype="multipart/form-data">
										<table class="variations">
											<tbody>
												
											</tbody>
										</table>
										<div>
											
											<button type="submit" name="add-to-cart" value="" class="theme_button color1 add_to_cart_button">Order Via Whatsapp</button> 
											</div>
									</form>
									<div class="product_meta highlightlinks">
										<ul class="list1 feature-list bottommargin_0">
											
											<li><span class="grey">Category:</span> <a href="<?php echo base_url(); ?>Katalog/Kategori/<?php echo $detail->slug_kategori; ?>"><?php echo $detail->kategori; ?></a></li>
											
										</ul>
									</div>
								</div>
								<!-- .summary.col- -->
							</div>
							<!-- .product.row -->
							<div class="woocommerce-tabs">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs wc-tabs" role="tablist">
									<li class="active"><a href="#details_tab" role="tab" data-toggle="tab">Description</a></li>
								
								</ul>
								<!-- Tab panes -->
								<div class="tab-content big-padding top-color-border">
									<div class="tab-pane fade in active" id="details_tab">
										<p><?= $detail->deskripsi; ?></p>
									</div>
									
								</div>
								<!-- eof .tab-content -->
							</div>
							<!-- .woocommerce-tabs -->
							<div class="related-products">
								<h2>Produk Lainnya</h2>
								<div class="owl-carousel with_shadow_items" data-dots="false" data-nav="true" data-loop="true" data-autoplay="true" data-responsive-lg="2" data-responsive-md="2" data-responsive-sm="2" data-responsive-xs="1">
									<?php foreach ($produkall as $key) {
										# code...
									?>
									<article class="product vertical-item content-padding big-padding text-center with_border">
										<div class="item-media-wrap">
											<div class="item-media"> <a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key['slug']; ?>">
                                    <img src="<?php echo base_url(); ?>assets/images/<?php echo $key['gambar'] ?>" alt=""/>
                                </a> </div>
										</div>
										<div class="item-content">
											<h3 class="entry-title"> <a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key['slug']; ?>"><?php echo $key['title']; ?></a> </h3>
											
											<div class="price"><?php
                                                        $harga = $key['harga'];
                                                        $diskon_persen = $key['diskon'];
                                                       
                                                        if($diskon_persen == 0){
                                                        echo '<span class="amount">'.'Rp' .number_format($harga,2,",",".") . '</span>';
                                                         } else { 
                                                        $i = $harga * $diskon_persen/100;
                                                        $a = $harga - $i;

                                                        echo '<span style="text-decoration: line-through red;">'.'Rp' .number_format($harga,2,",",".") . '</span>'.'<br>';
                                                        echo $diskon_persen.'%'.'&nbspOFF'.'<br>';
                                               
                                                        echo '<span class="amount" style="color:black;">'.'Rp' .number_format($a,2,",",".") . '</span> ';
                                                         } 
                             						?></div> <a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key['slug']; ?>" class="add_to_cart theme_button color1">Read More</a> </div>
									</article>
								<?php } ?>
									
								</div>
							</div>
						</div>
						<!--eof .col-sm-8 (main content)-->
						<aside class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-md-pull-8 col-lg-pull-8 col-sm-offset-3 col-md-offset-0">

							<div class="widget widget_search">
								<h3 class="widget-title black">Search Product</h3>
								<?php echo form_open('katalog/search') ?>
									<div class="form-group margin_0">
										<label class="sr-only" for="widget-search">Search for:</label> 
										<input id="widget-search" type="text" value="" name="keyword" class="form-control" placeholder="keyword"> 
										<button type="submit" class="theme_button bg_button color2">Search</button>		
									</div>
								 <?php echo form_close() ?>
							</div>
							<div class="widget widget_categories">
								<h3 class="widget-title">Categories</h3>
								<div class="with_border">
									<ul class="greylinks">
										<?php foreach ($kategori as $key) { ?>
										<li>
											<a href="<?php echo base_url(); ?>katalog/kategori/<?php echo $key['slug_kategori']; ?>"><?= $key['kategori'] ?></a>
										</li>
										<?php } ?>
									</ul>
								</div>
							</div>
							
							
							</div>
						</aside>
					</div>
				</div>
			</section>