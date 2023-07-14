<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="tr">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-205052546-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-205052546-1');
</script>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Anasayfa - Kılavuz l Kişisel Gelişim Kursu</title>
    <!-- Favicon -->
    <?php include("favo.php")?>

    <!-- Bootstrap core CSS -->
    <link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="css\default.css" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="css\style.css" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="css\owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css\modal-video-min.css" rel="stylesheet" type="text/css">
    <link href="css\plugin.css" rel="stylesheet" type="text/css">
    <link href="css\magnific-popup.css" rel="stylesheet" type="text/css">

    <!--Font Icons-->
    <link href="css\font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css\flaticon1.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="home-3">

<?php include("ust.php"); ?>
    <!-- Paradise Slider -->
    <div id="fw_al_009" class="carousel slide ps_control_sbo swipe_x ps_easeOutInCubic" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

  
<?php
$i = 0;
if($db->veriSaydir("slayt", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("slayt", array(), array(), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
		$i++;
if($i == 1) {
 ?>
 
		<div class="item active">

                <!-- Slide Background -->
                <img src="upload/<?=$rows->resim;?>" alt="<?=$rows->baslik;?>">

                <!-- Slide Text Layer -->
                <div class="fw_al_009_slide">
                    <h2 data-animation="animated fadeInRight"><?=$rows->baslik;?></h2>
                    <h4 class="hidden-xs" data-animation="animated fadeInLeft"><?=$rows->aciklama;?></h4>                    
                    <a href="<?=$rows->buton_adres;?>" class="mt_btn_yellow" data-animation="animated fadeInRight"><?=$rows->buton_yazi;?></a>
                </div>
            </div>
            <!-- End of Slide -->
 
 	 <?php } else { $i = 1; ?>
	 
 
		<div class="item">

                <!-- Slide Background -->
                <img src="upload/<?=$rows->resim;?>" alt="<?=$rows->baslik;?>">

                <!-- Slide Text Layer -->
                <div class="fw_al_009_slide">
                    <h2 data-animation="animated fadeInRight"><?=$rows->baslik;?></h2>
                    <h4 data-animation="animated fadeInLeft"><?=$rows->aciklama;?></h4>                    
                    <a href="<?=$rows->buton_adres;?>" class="mt_btn_yellow" data-animation="animated fadeInRight"><?=$rows->buton_yazi;?></a>
                </div>
            </div>
			
            	<?php }}} ?>
 
        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#fw_al_009" role="button" data-slide="prev">
            <span class="fa fa-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Geri</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#fw_al_009" role="button" data-slide="next">
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">İleri</span>
        </a>

    </div>
    <!-- End Paradise Slider -->

    <!--*About*-->
    <section id="mt_about">
        <div class="container">
            <div class="about_services">
                <div class="row">
                    <div class="col-sm-4">   
                        <div class="">
                            <img src="upload/<?=substr($db->VeriOkuTek("kurumsal", "resim","url", "hakkimizda"),0,9999);?>" alt="<?=substr($db->VeriOkuTek("kurumsal", "isim","url", "hakkimizda"),0,9999);?>" class="abt_im_1">
                        </div>                 
                    </div>
                    <div class="col-sm-8">
                        <div class="about-items">
                            <div style="    margin-bottom: 0;" class="inner-heading">
                                <h3>Kılavuz l Kişisel Gelişim Kursu</h3>
                                <h2 class="mar-0"><?=substr($db->VeriOkuTek("kurumsal", "isim","url", "hakkimizda"),0,9999);?></h2>
                            </div>
                            <p> 
							<?=substr($db->VeriOkuTek("kurumsal", "aciklama","url", "hakkimizda"),0,9999);?>
                            </p>
                            <a href="kurumsal-<?=substr($db->VeriOkuTek("kurumsal", "url","url", "hakkimizda"),0,9999);?>.html" class="mt_btn_yellow">Devamını Oku</a>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->
    <!-- About Courses -->
 
    <div  style="     margin-top: 120px;" class="edu-courses about-edu-courses">
        <div class="container">
            <div class="row panel-grid-banner">
               

<?php
        if($db->veriSaydir("ortamodul", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("ortamodul", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
 

 <div style="    margin-bottom: 29px;"  class="col-sm-4 col-xs-12">
                    <div class="inner-grid">                        
                        <div class="text-courses">
                            <i style="    margin-bottom: 4px;" class="<?=$rows->icon;?>"></i>
                            <h3 style="    margin-bottom: 3px;"><?=$rows->baslik;?></h3>
                        </div>
                        <div class="courses-content">
                            <p><?=$rows->aciklama;?></p>
                         </div>
                    </div>
                </div>
             
  <?php }} ?>

			 </div>
        </div>
    </div>
     <!-- End About Courses -->
   
    <!--Education Event-->
	<section class="edu-events event_third">
		<div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Duyurular</h3>
                <h2>Duyurularımızdan Haberdar Olun.</h2>
            </div>
			<div class="row">
				<div class="col-xs-12">
               
			              
<?php
        if($db->veriSaydir("duyurular", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("duyurular", array(), array(), "row", "ASC",2);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
 

			   <div class="event-item">
                        <div class="event-date text-center text-uppercase">
                            <h4 class="mar-0">KILA <span>VUZ</span></h4>                                
                        </div>
                        <div class="event-details">
                            <div class="event_infn">
                               <h3 class="mar-bottom-10"><a href="duyuru-<?=$rows->url;?>.html"><?=$rows->isim;?></a></h3>
                                <ul class="event-time">
                                    <li><i class="fa fa-clock-o"></i><?=$rows->tarih;?></li>
                                 </ul>

                                <p> <?=substr($rows->aciklama,0,158);?></p>
                            </div>

                            <div  style="right: -118px;    top: 0;    width: 343px;    height: 100% !important;}" class="cvvs_img">
                                <img src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>">
                            </div>
                        </div>                             
                    </div>
   <?php }} ?>
 
                    <div class="text-center"><a href="duyurular" class="mt_btn_yellow">Tüm Duyurular</a></div>

                </div>  
			</div>
		</div>
	</section>
	<!--End Education Event-->

    

    <!--* Testimonial*-->
    <section id="const-testi" class="edu-testimonial testi-3">
        <div class="container">  
            <!-- section title -->
            <div class="inner-heading">
                <h3>Veli Görüşleri</h3>
                <h2>Değerli Velilerimizin bizim hakkımızda ne dedi?</h2>
            </div>    
            <div class="row">
                <div class="col-sm-12">
                    <div class="row slider-eductestimo3">
                       

<?php
        if($db->veriSaydir("nedenildi", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("nedenildi", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

		  

  <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                    <p><?=$rows->aciklama;?></p>
                                     <h4>
                                        <a href="#" class="text-uppercase"><?=$rows->ad;?></a>
                                        <span><?=$rows->unvan;?></span>
                                    </h4>
                                </div>
                            </div>
                        </div>
  <?php }} ?>
                    
					</div>
                </div>
            </div>      
        </div>
    </section>
    <!--* EndTestimonial*-->

    <!-- Gallery -->
    <section style="    padding: 10px 0 160px;" id="the-gallery" class="wide-gallery wg_ee2">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                 <h2>Galeri</h2>
            </div>
            <div class="row">
              
<?php
        if($db->veriSaydir("galeri", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("galeri", array(), array(), "row", "ASC",6);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

		     <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="upload/<?=$rows->image;?>" title="Kılavuz Dershahanesi Galeri">
                            <img src="upload/<?=$rows->image;?>" alt="Kılavuz Dershahanesi Galeri">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>                    
                </div>
            <?php }} ?>

			</div>
        </div>
    </section>
    <!-- End Gallery -->

    
    <!--* End Partners *-->
<?php include("alt.php"); ?>

    <!--*Scripts*-->

    <!-- Latest jquery --><script src="js\jquery-3.2.1.min.js"></script>

    <!-- latest Bootstrap --><script src="js\bootstrap.min.js"></script>

    <!-- Parallax jquery --><script src="js\jquery.parallax-1.1.3.js"></script>
    
    <!-- Fancybox jquery --><script src="js\jquery.fancybox.pack.js"></script>

    <!-- Easing Jquery --><script src="js\jquery.easing.min.js"></script>

    <!-- wow animated jquery --><script src="js\wow.min.js"></script>

    <!-- Navigation jquery --><script src="js\jquery.nav.js"></script>

    <!-- Magnific Popup JS --><script src="js\jquery.magnific-popup.min.js"></script>

    <!-- custom image popup Jquery --><script src="js\custom-magnificpopup.js"></script>

    <!-- Slick jquery --><script src="js\slick.js"></script>

    <!-- Slicknav jquery --><script src="js\slicknav.js"></script>

    <!-- custom nav jquery --><script src="js\custom-nav.js"></script>

    <!-- Owl Carousel Jquery --><script src="js\owl.carousel.min.js"></script>

    <!-- Appear Jquery --><script src="js\jquery.appear.js"></script>

    <!-- isotope Jquery --><script src="js\isotope.min.js"></script>

    <!-- CountTo Jquery --><script src="js\jquery.countTo.js"></script>

    <!-- Popup video Jquery --><script src="js\jquery-modal-video.min.js"></script>

    <!-- custom Popup video Jquery --><script src="js\custom-modalvideo.js"></script>

    <!-- main default Jquery --><script src="js\main.js"></script>

    

</body>

</html>