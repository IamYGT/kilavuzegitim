    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <div id="top"></div>

    <!--*Header*-->
    <header id="inner-navigation">

        <!-- top bar -->
        <div class="topbar-section">
            <div class="container">
                <div class="topbar-inner">
                    <div class="top-bar-left pull-left">
                    <ul>
                       <li><a style="color:#fff;" href="tel:<?=$db->ayarlar("value" , "tel");?>"> <i class="fa fa-phone"></i> Telefon: <?=$db->ayarlar("value" , "tel");?> </a></li>
                       <li><a style="color:#fff;" href="mailto:<?=$db->ayarlar("value" , "eposta");?>"><i class="fa fa-envelope"></i> Eposta: <?=$db->ayarlar("value" , "mail");?></a></li>
                    </ul>
                    </div>
              
                    <div class="top-bar-right pull-right">
                        <ul class="social_icons">
                                <li><a href="<?=$db->ayarlar("value" , "facebook");?>"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?=$db->ayarlar("value" , "instagram");?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=<?=$db->ayarlar("value" , "whatsapp");?>&text=Merhaba?"><i class="fa fa-whatsapp"></i></a></li>
								<li><a href="tel:<?=$db->ayarlar("value" , "tel");?>"><i class="fa fa-phone"></i></a></li>

                            </ul>                  
                    </div>
                </div>
            </div>
        </div>

        <!-- navbar start -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo pull-left">
                    <h2><a href="index"><img  class="logo-img" src="images/w-logo.png" alt="Kılavuz l Kişisel Gelişim Kursu Logosu"> </a></h2>
                </div>
                
                <div id="navbar" class="navbar-nav-wrapper pull-right">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
						<li><a href="index">Anasayfa  </a></li>

                        <li class="active">
                            <a href="#">Hakkımızda <i class="fa fa-angle-down"></i></a>
                            <ul>
                              
<?php
        if($db->veriSaydir("kurumsal", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("kurumsal", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

		      <li><a href="kurumsal-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
                          <?php }} ?>
  
						 </ul>
                        </li>
                       
					   <li>
                            <a href="#">Eğitimlerimiz <i class="fa fa-angle-down"></i></a>
                            <ul>
                              
<?php
        if($db->veriSaydir("egitimlerimiz", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("egitimlerimiz", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

		      <li><a href="egitim-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
                          <?php }} ?>                            </ul>    
                        </li> 
                       
						<li><a href="duyurular">Duyurular</a></li>
						<li><a href="galeri">Galeri  </a></li>
  <li>
                            <a href="#">Online Kayıt <i class="fa fa-angle-down"></i></a>
                            <ul>
 

		      <li><a href="egitim-online-kayit">Eğitim Online Kayıt</a></li>
		      <li><a href="sinav-online-kayit">Sınav Online Kayıt</a></li>
                                                    
													</ul>    
                        </li> 

						<li><a href="iletisim">İletişim  </a></li>

 
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
            
            <div id="slicknav-mobile"></div>
        </nav>
        <!-- navbar end -->
    </header>
    <!--* End Header*-->
