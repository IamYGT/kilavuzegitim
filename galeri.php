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

    <title>Galeri - Kılavuz l Kişisel Gelişim Kursu</title>

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
    <link href="css\magnific-popup.css" rel="stylesheet" type="text/css">

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
                <h2>Galeri</h2>
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
                 <li class="active">Galeri</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!-- Gallery -->
    <section id="the-gallery" class="wide-gallery inner-gallery section-inner">
        <div class="container">
           
		   
            <div class="row ge_second">
              

<?php
        if($db->veriSaydir("galeri", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("galeri", array(), array(), "row", "ASC");
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

    <!-- Slick jquery --><script src="js\slick.js"></script>

    <!-- Slicknav jquery --><script src="js\slicknav.js"></script>

    <!-- custom nav jquery --><script src="js\custom-nav.js"></script>

    <!-- Owl Carousel Jquery --><script src="js\owl.carousel.min.js"></script>

    <!-- Appear Jquery --><script src="js\jquery.appear.js"></script>

    <!-- isotope Jquery --><script src="js\isotope.min.js"></script>

    <!-- CountTo Jquery --><script src="js\jquery.countTo.js"></script>
    
    <!-- Popup video Jquery --><script src="js\jquery-modal-video.min.js"></script>

    <!-- custom image popup Jquery --><script src="js\custom-magnificpopup.js"></script>

    <!-- main default Jquery --><script src="js\main.js"></script>

</body>

</html>