		
		<style>
			#liproduk {
				list-style: none;
			}
		</style>


		<section class="intro_section page_mainslider cs all-scr-cover image-dependant">
		    
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url(); ?>assets/images/isn12.png" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>assets/images/isn12.png" alt="Chicago">
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>assets/images/isn12.png" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="pp_previous"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="pp_next"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			


				<!-- eof flexslider -->
		</section>


			<section id="products" class="ls section_padding_top_150 section_padding_bottom_145">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center"> <span class="above_heading highlight">Products</span>
							<h2 class="section_header">Pilih sesuai dengan <br>Kebutuhan anda</h2>
							<div class="row flex-wrap loop-colors columns_padding_30 columns_margin_bottom_50">
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="teaser hover-teaser main_bg_color big-padding text-center">
										<div>
											<div class="teaser_icon highlight size_small"> <i class="clr-service-card"></i> </div>
											<h3 class="entry-title small bottommargin_0">Business cards</h3>
											<p>Starting at Rp.20.000</p>
										</div> <a href="<?php echo base_url(); ?>katalog" class="abs-link"></a> </div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="teaser hover-teaser main_bg_color big-padding text-center">
										<div>
											<div class="teaser_icon highlight size_small"> <i class="clr-service-booklet"></i> </div>
											<h3 class="entry-title small bottommargin_0">Brochures</h3>
											<p>Starting at Rp.10.000</p>
										</div> <a href="<?php echo base_url(); ?>katalog" class="abs-link"></a> </div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="teaser hover-teaser main_bg_color big-padding text-center">
										<div>
											<div class="teaser_icon highlight size_small"> <i class="clr-service-copy"></i> </div>
											<h3 class="entry-title small bottommargin_0">Copy services</h3>
											<p>Starting at Rp.1000</p>
										</div> <a href="<?php echo base_url(); ?>katalog" class="abs-link"></a> </div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="teaser hover-teaser main_bg_color big-padding text-center">
										<div>
											<div class="teaser_icon highlight size_small"> <i class="clr-service-t-shirt"></i> </div>
											<h3 class="entry-title small bottommargin_0">T-shirt prints</h3>
											<p>Starting at Rp.50.000</p>
										</div> <a href="<?php echo base_url(); ?>katalog" class="abs-link"></a> </div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="teaser hover-teaser main_bg_color big-padding text-center">
										<div>
											<div class="teaser_icon highlight size_small"> <i class="clr-service-calendar"></i> </div>
											<h3 class="entry-title small bottommargin_0">Calendars</h3>
											<p>Starting at Rp.10.000</p>
										</div> <a href="<?php echo base_url(); ?>katalog" class="abs-link"></a> </div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="teaser hover-teaser main_bg_color big-padding text-center">
										<div>
											<div class="teaser_icon highlight size_small"> <i class="clr-service-banner"></i> </div>
											<h3 class="entry-title small bottommargin_0">Banners</h3>
											<p>Starting at Rp.25.000</p>
										</div> <a href="<?php echo base_url(); ?>katalog" class="abs-link"></a> </div>
								</div>
							</div>
							<div class="toppadding_20"></div>
							
					</div>
				</div>
			</section>

			<section id="about" class="ls section_padding_top_150">
				<div class="container">
					<div class="row flex-wrap v-center">
						<div class="col-xs-12 col-md-7"> <img src="<?php echo base_url(); ?>assets/images/about.png" alt="" class="cover-image"> </div>
						<div class="col-xs-12 col-md-5"> 

							<span class="above_heading highlight">Welcome</span>
							<h2 class="section_header">Digital printing Services</h2>
							<p>Melayani pembuatan Mug,T-shirt,Banner,Invitation card dan wedding card untuk wilayah jabodetabek</p>
							<div class="toppadding_10 visible-md visible-lg"></div>
							
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center"> <span class="above_heading highlight">New Category</span>
							<h2 class="section_header">Our Services</h2>
							<div class="toppadding_10 visible-lg"></div>
						</div>
						<div class="col-sm-12">
							<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
								<?php foreach ($productdata as $key) {?>
								<div class="isotope-item col-xs-12 col-sm-6 col-md-4">

									<article class="vertical-item text-center">
										<li class="product type-product" id="liproduk">
										<article class="vertical-item content-padding big-padding text-center with_border">
											<div class="item-media-wrap">
												<div class="item-media">
													<a href="#">
		                                    			<img src="<?php echo base_url(); ?>assets/images/<?php echo $key['gambar']; ?>" alt=""/>
			                                		</a>
			                                	</div>
												</div>
												<div class="item-content">
													<h3 class="entry-title"> <a href="#"><?php echo $key['title'] ?></a> </h3>
													
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
													</div>
													<a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key['slug'] ?>" class="add_to_cart theme_button color1">Read More</a>
												</div>
											</article>
									</li>
									</article>
								</div>
							<?php } ?>

								

									
									
							</div>


							<!-- eof .isotope_container.row -->
							<!-- <div class="topmargin_50 text-center">
								<ul class="pagination">
									<li><a href="#"><span class="sr-only">Prev</span><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#"><span class="sr-only">Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div>
			</section>

			