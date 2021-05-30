	<section class="page_breadcrumbs ds background_cover section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1>Cara Order</h1>
							<ol class="breadcrumb darklinks">
								<li> <a href="index.html">
							Home
						</a> </li>
								<li> <a href="#">Katalog </a> </li>
								<li class="active"> <span>Cara Order</span> </li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_30 single">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-push-1">
							<?php foreach ($corder as $key) {?>
							<article class="single-post post vertical-item content-padding big-padding with_border">
								
								<div class="item-content">
									<header class="entry-header">
										<h1 class="entry-title"> <a href="#" rel="bookmark"><?php echo $key['title']; ?></a> </h1>
										
									</header>
									<div class="entry-content">
										<?php echo $key['deskripsi']; ?>
									</div>
									<!-- .entry-content -->
									<div class="entry-meta content-justify v-spacing v-center">
										<div>
											<div class="tag-links"> <a href="#">printing</a> <a href="#">studio</a> <a href="#">typing</a> </div>
										</div>
										<div class="share_buttons"> <span class="small-text grey">Share:</span> <a href="#" class="social-icon color-icon socicon-facebook"></a> <a href="#" class="social-icon color-icon socicon-twitter"></a> <a href="#" class="social-icon color-icon socicon-googleplus"></a> </div>
									</div>
								</div>
								<!-- .item-content -->
							</article>
							<?php } ?>
							
							
						</div>
						<!--eof .col-sm-8 (main content)-->
					</div>
				</div>
			</section>