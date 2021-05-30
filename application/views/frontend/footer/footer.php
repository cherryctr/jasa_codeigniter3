


<footer class="page_footer cs main_color7 section_padding_top_110 section_padding_bottom_120 columns_margin_bottom_30">
				<div class="container">
					<div class="row">
						<?php foreach ($header as $key) {?>
								<div class="col-xs-12 col-sm-4">
									<div class="teaser text-center">
										<div class="teaser_icon size_huge highlight<?php echo $key['angka'] ?>"> <img src="<?php echo base_url(); ?>assets/images/<?php echo $key['gambar'] ?>" alt=""> </div>
										<p> <span class="small-text highlight<?php echo $key['angka'] ?>"><?php echo $key['title'] ?></span><br> <span class="big black"><?php echo $key['subject'] ?></span> </p>
									</div>
								</div>
						<?php } ?>
					</div>
			</footer>
			<section class="page_copyright cs section_padding_top_110 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h4 style="color: white;">Link Marketplace</h4>
							<p class="page_social bottommargin_20">

								<a href="https://m.tokopedia.com/tokoundangan"><img src="<?php echo base_url('assets/images/TOKOPEDIA-LOGO.png'); ?>" style="width: 298px;
								    height: 132px;
								   "></a>
								<a href="https://shopee.co.id/tokoundangan_minimalis" ><img src="<?php echo base_url('assets/images/logo-shopee.png'); ?>" style="width: 298px;
								    height: 132px;
								    border-radius: 6px;"></a>
								<a href="https://m.bukalapak.com/u/tokoundanganminimalis"><img src="<?php echo base_url('assets/images/logo-bukalapak.jpg'); ?>" style="width: 298px;
								    height: 132px;
								    border-radius: 6px;"></a>
								
							</p>
						<p class="small-text black">&copy; Copyright 2020 Jasa Digital Print | Cengkareng Jakarta Barat</p>
						</div>
					</div>
				</div>
			</section>




		</div>
		<!-- eof #box_wrapper -->
		
	</div>

	<!-- eof #canvas -->
	<script src="<?php echo base_url(); ?>assets/js/compressed.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/selectize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/floating-wpp.min.js"></script>
	<!-- <script type="text/javascript" src="jquery-3.3.1.min.js"></script> -->
 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/floating-wpp.js"></script>
    <script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '6281807166518',
            popupMessage: 'Hallo ada yang bisa saya bantu?',
            message: "Saya mau order dong min.",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Selamat datang !',
            headerColor: '#128c7e',
            backgroundColor: '#128c7e',
            buttonImage: '<img src="<?php echo base_url(); ?>assets/images/whatsapp.svg" />'
        });
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125131780-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125131780-3');
</script>

	<!-- <script async data-id="36240" src="https://cdn.widgetwhats.com/script.min.js"></script> -->
	<!-- <script async data-id="36240" src="https://cdn.widgetwhats.com/script.min.js"></script> -->
</body>



</html>