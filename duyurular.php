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

    <title>Duyurular - Kılavuz l Kişisel Gelişim Kursu</title>
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
                <h2>Duyurular</h2>
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
                 <li class="active">Duyurular</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--* Events*-->
    <section class="edu-events section-inner">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Duyurular</h3>
                <h2>Duyurulardan haberdar olun.</h2>
            </div>
            <div class="row">
               
<?php
        if($db->veriSaydir("duyurular", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("duyurular", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
  <div class="col-md-6 col-sm-12">
                    <div class="event-item">
                        <div class="event-date text-center text-uppercase">
                            <h4 class="mar-0">KILA<span>VUZ</span> </h4>                                
                        </div> 
                        <div class="event-details">
                            <h3 class="mar-bottom-10"><a href="duyuru-<?=$rows->url;?>.html"> <?=$rows->isim;?></a></h3>
                            <ul class="event-time">
                                <li><i class="fa fa-clock-o"></i> <?=$rows->tarih;?> </li>
                             </ul>
                        </div>
                    </div>
                </div>  
             
  <?php }} ?>

			 </div><!-- /.row -->
        </div>
    </section>
    <!--* End Events*-->


    <!--*Footer*-->
    <?php include("alt.php"); ?>


    <!--*Scripts*-->

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

    <!-- div default Jquery --><script src="js\main.js"></script>

</body>

</html>