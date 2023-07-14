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

    <title><?=$db->VeriOkuTek("duyurular", "isim", "url", $_GET["url"]);?> - Kılavuz l Kişisel Gelişim Kursu</title>
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
                <h2> <?=$db->VeriOkuTek("duyurular", "isim", "url", $_GET["url"]);?></h2>
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
                <li><a href="duyurular">Duyurular</a></li>
                <li class="active"><?=$db->VeriOkuTek("duyurular", "isim", "url", $_GET["url"]);?></li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--* Services*-->
    <section id="mt_services" class="light-bg services-section section-inner">
        <div class="container">                
            <div class="course-detail">
                <div class="row">
                    <div class="col-md-8 col-sm-12">                        
                        <div class="post_img">
                            <img src="upload/<?=$db->VeriOkuTek("duyurular", "resim", "url", $_GET["url"]);?>" alt="<?=$db->VeriOkuTek("duyurular", "isim", "url", $_GET["url"]);?>">
                        </div>
                        <div class="course-tabs">
                            <div class="post_title_eve">
                                <h3><?=$db->VeriOkuTek("duyurular", "isim", "url", $_GET["url"]);?></h3>
                                <ul class="list-inline list-unstyled">
                                    <li><i class="ion-ios-calendar-outline"></i>&nbsp; <?=$db->VeriOkuTek("duyurular", "tarih", "url", $_GET["url"]);?> </li>
                                 </ul>
                            </div>
                            <div class="eve-content">
                                <div class="over-view">
                              <?=$db->VeriOkuTek("duyurular", "aciklama", "url", $_GET["url"]);?>
                                </div>              
                            </div>
                    
                        </div>
                    </div>
                    <aside class="col-md-4 col-sm-12"> 
					
                        <div class="widget widget_recent_entries"><!-- widget list -->
                            <h3 class="blog_heading_border"> Diğer Duyurular </h3>
                            <ul>
							           
<?php
        if($db->veriSaydir("duyurular", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("duyurular", array(), array(), "row", "ASC",5);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
  
             

                                <li>
                                    <img src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>">
                                    <h4>
                                        <a href="duyuru-<?=$rows->url;?>.html"><?=$rows->isim;?></a>
                                    </h4>
                                    <p><?=$rows->tarih;?> 
                                    </p>
                                </li>
                                 <?php }} ?>

							   </ul>
                        </div><!-- End widget list -->

                       
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--* End Services*-->

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