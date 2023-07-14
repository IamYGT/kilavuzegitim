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

    <title><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?> - Kılavuz l Kişisel Gelişim Kursu</title>

    <!-- Favicon -->
    <?php include("favo.php")?>

    <!-- Bootstrap core CSS -->
    <link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="css\default.css" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="css\style.css" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="css\plugin.css" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link href="css\font-awesome.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="page">
    <!--PRELOADER-->
 <?php include("ust.php"); ?>

    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>
    <!-- End banner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">    
        <div class="container">        
            <ul class="breadcrumb">
                <li><a href="index">Anasayfa</a></li>
                <li class="active"> <?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--*About*-->
    <section style="    padding: 80px 0 80px;" id="mt_about">
        <div class="container">
            <div class="about_services">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-items">
                            <div class="inner-heading">
                                <h3>Kurumsal</h3>
                                <h2 class="mar-0"><?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?></h2>
                            </div>
                            <p><?=$db->VeriOkuTek("kurumsal", "aciklama", "url", $_GET["url"]);?>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-edu-bg">
                            <img src="upload/<?=$db->VeriOkuTek("kurumsal", "resim", "url", $_GET["url"]);?>" alt="<?=$db->VeriOkuTek("kurumsal", "isim", "url", $_GET["url"]);?>">
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->

    <!-- About Courses -->
    <div  style="    padding-bottom: 73px;" class="edu-courses about-edu-courses">
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
 

    <!--* Testimonial*-->
    <section style="    padding: 80px 0 150px;" id="const-testi" class="edu-testimonial">
        <div class="container wow slideInDown" data-wow-duration="2s">      
            <div class="row">
                <div class="col-sm-6">
                    <!-- section title -->
                    <div class="inner-heading">
                        <h3 class="white">Veli Yorumları</h3>
                        <h2 class="white">Velilerimiz bizim hakkımızda neler dedi?</h2>
                        <div class="testimonial-abt">
                            <p class="white"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row slider-eductestimo">
                       

<?php
        if($db->veriSaydir("nedenildi", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("nedenildi", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
 <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                     <h4>
                                        <a href="#" class="text-uppercase"><?=$rows->ad;?></a>
                                        <span><?=$rows->unvan;?></span>
                                    </h4>
                                    <p><?=$rows->aciklama;?></p>

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

 <?php include("alt.php"); ?>



    <!-- 
	<style>
	#newsletter{
		display:none;
	}
	</style>-->

    <!-- Latest jquery --><script src="js\jquery-3.2.1.min.js"></script>

    <!-- latest Bootstrap --><script src="js\bootstrap.min.js"></script>

    <!-- Parallax jquery --><script src="js\jquery.parallax-1.1.3.js"></script>
    
    <!-- Fancybox jquery --><script src="js\jquery.fancybox.pack.js"></script>

    <!-- wow animated jquery --><script src="js\wow.min.js"></script>

    <!-- Navigation jquery --><script src="js\jquery.nav.js"></script>

    <!-- Slick jquery --><script src="js\slick.js"></script>

    <!-- Slicknav jquery --><script src="js\slicknav.js"></script>

    <!-- custom nav jquery --><script src="js\custom-nav.js"></script>

    <!-- Owl Carousel Jquery --><script src="js\owl.carousel.min.js"></script>

    <!-- Easing Jquery --><script src="js\jquery.easing.min.js"></script>

    <!-- Appear Jquery --><script src="js\jquery.appear.js"></script>

    <!-- isotope Jquery --><script src="js\isotope.min.js"></script>

    <!-- CountTo Jquery --><script src="js\jquery.countTo.js"></script>

    <!-- main default Jquery --><script src="js\main.js"></script>

</body>

</html>