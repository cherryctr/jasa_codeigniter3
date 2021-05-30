
<section class="page_breadcrumbs ds background_cover section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1>katalog</h1>
							<ol class="breadcrumb darklinks">
								<li> <a href="<?php echo base_url(); ?>">
							Home
						</a> </li>
								
								<li class="active"> <span>katalog</span> </li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-lg-8 col-md-push-4 col-lg-push-4">
							
							<div class="columns-2">
								<ul id="products" class="products list-unstyled">
									<!-- PRODUK KONTENT -->
									<?php foreach ($productdata as $key) {?>
									<li class="product type-product">
										<article class="vertical-item content-padding big-padding text-center with_border">
											<div class="item-media-wrap">
												<div class="item-media"> <a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key['slug'] ?>">
		                                    <img src="<?php echo base_url(); ?>assets/images/<?php echo $key['gambar'] ?>" alt=""/>
		                                </a> </div>
											</div>
											<div class="item-content">
												<h4 class="entry-title"> <a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key['slug'] ?>"><?php echo $key['title'] ?></a> </h4>
												
												<div class="price"> 
													<?php
                                                        $harga = $key['harga'];
                                                        $diskon_persen = $key['diskon'];
                                                       
                                                        if($diskon_persen == 0){
                                                        echo '<span class="amount">'.'Rp' .number_format($harga,2,",",".") . '</span>';
                                                         } else { 
                                                        $i = $harga * $diskon_persen/100;
                                                        $a = $harga - $i;

                                                        echo '<span style="text-decoration: line-through red;">'.'Rp' .number_format($harga,2,",",".") . '</span>'.'<br>';
                                                        echo $diskon_persen.'%'.'&nbspOFF'.'<br>';
                                               
                                                        echo '<span class="amount">'.'Rp' .number_format($a,2,",",".") . '</span> ';
                                                         } 
                             						?>
													<!-- <span class="amount">$9.99</span>  -->
												</div> <a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key['slug'] ?>" class="add_to_cart theme_button color1">Read More</a> </div>
										</article>
									</li>
									<?php 	}  ?>
									<!-- PRODUK KONTENT -->
									
								</ul>
							</div>
							<!-- eof .columns-* -->
							<div class="text-center topmargin_30">
								<ul class="pagination">
									<!-- <li class="disabled"><a href="#"><span class="sr-only">Prev</span><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#"><span class="sr-only">Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->
									<?php echo $this->pagination->create_links(); ?>
								</ul>
							</div>
						</div>
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
			</section>