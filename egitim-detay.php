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

    <title><?=$db->VeriOkuTek("egitimlerimiz", "isim", "url", $_GET["url"]);?> - Kılavuz l Kişisel Gelişim Kursu</title>

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
                <h2><?=$db->VeriOkuTek("egitimlerimiz", "isim", "url", $_GET["url"]);?></h2>
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
                <li><a href="egitimlerimiz">Eğitimlerimiz</a></li>
                <li class="active"><?=$db->VeriOkuTek("egitimlerimiz", "isim", "url", $_GET["url"]);?>
</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--* Services*-->
    <section id="mt_services" class="light-bg services-section section-inner">
        <div class="container">                
            <div class="course-detail">
                <div class="row">
                    <div class="col-md-12 col-sm-12">  
                        <div class="post_title">
                            <h2><?=$db->VeriOkuTek("egitimlerimiz", "isim", "url", $_GET["url"]);?></h2>
                        </div>                      
                        <div class="post_img">
                            <img style="    width: 100%;" src="upload/<?=$db->VeriOkuTek("egitimlerimiz", "resim", "url", $_GET["url"]);?>" alt="<?=$db->VeriOkuTek("egitimlerimiz", "isim", "url", $_GET["url"]);?>">
                        </div>
                        <div class="course-tabs">
                            <div class="nav-content-c">
                               
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <div class="post_body">
                                           <?=$db->VeriOkuTek("egitimlerimiz", "aciklama", "url", $_GET["url"]);?>
                                        </div>
                                    </div>
                                  </div>                   
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
            <div class="related-item">
                <!-- section title -->
                <div class="inner-heading">
                    <h3>Diğer Eğitimlerimiz</h3>
                 </div>
                <div class="row inner-detail-p">
                   
				   				
<?php
        if($db->veriSaydir("egitimlerimiz", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("egitimlerimiz", array(), array(), "row", "ASC",3);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

				   <div class="col-md-4 col-sm-6 col-xs-12 item">
                         <div class="featured-item">
                        <div class="feat-img">
                            <img src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>">
                            
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="egitim-<?=$rows->url;?>.html">
                                            <h4 style="    color: #ffffff;" >Devamını Oku</h4>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            
                            <a href="egitim-<?=$rows->url;?>.html"><h3><?=$rows->isim;?></h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                 </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                     </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                    </div>
					  <?php }} ?>
					
					
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

    <!-- Easing Jquery --><script src="js\jquery.easing.min.js"></script>

    <!-- Appear Jquery --><script src="js\jquery.appear.js"></script>

    <!-- isotope Jquery --><script src="js\isotope.min.js"></script>

    <!-- div default Jquery --><script src="js\main.js"></script>
</body>

</html>