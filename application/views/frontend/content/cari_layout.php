			
			<style>
				.background_testing {
					background-image: url('<?php echo base_url('assets/img/parallax/breadcrumb1.jpg'); ?>');
				}
			</style>
			
			<section class="page_breadcrumbs ds background_testing section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1>Search Page</h1>
							<ol class="breadcrumb darklinks">
								<li> <a href="index.html">
							Home
						</a> </li>
								<li> <a href="#">search</a> </li>
								<li class="active"> <span>Hasil search<?php //echo $keyword; ?></span> </li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			
			<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
								<?php 
								 if(count($caridata)>0) { 
								foreach ($caridata as $key) {
								# code...
							 ?>
								<div class="isotope-item col-xs-12 col-sm-6 col-md-4">
									<article class="vertical-item text-center">
										<div class="item-media-wrap">
											<div class="item-media"> <img src="<?php echo base_url(); ?>assets/images/<?php echo $key->gambar; ?>" alt="<?php echo $key->title; ?>"> <a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key->slug; ?>" class="abs-link"></a> </div>
										</div>
										<div class="item-content">
											<div class="entry-meta small-text inline-content with_dividers"> <span class="categories-links">
                                    <a href="<?php echo base_url(); ?>katalog/kategori/<?php echo $key->slug_kategori; ?>"><?php echo $key->kategori; ?></a>
		                                </span></div>
													<h3 class="entry-title small"><a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key->slug; ?>"><?php echo $key->title; ?></a></h3> <a href="<?php echo base_url(); ?>katalog/detail/<?php echo $key->slug; ?>" class="theme_button color1">Read More</a> </div>
											</article>
								</div>
								<?php  
								}
									}else{
									    echo '<h1> Produk yang anda cari tidak ada atau kosong kembali ke<a href="<?= base_url() ?>kategori"); ?>"Kategori</a> atau ke <a href="<?= base_url(); ?>">Home </a></h1>';
									}
							?>
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
