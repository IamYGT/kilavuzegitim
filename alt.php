    <!--*Footer*-->
    <footer id="mt_footer">
        <div class="container">

            <section id="newsletter">
                
            </section>

            <div class="footer-main">
                <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="follow_us">
                        
                    <h2><a href="index"><img  class="logo-img" src="images/beyazlogo.png" alt="Kılavuz l Kişisel Gelişim Kursu Logosu"> </a></h2>

                        <p> <?=substr($db->VeriOkuTek("kurumsal", "aciklama","url", "hakkimizda"),0,470);?></p>
                       

                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="footer-right">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="mt_contact_ftr">
                                    <h3>Hakkımızda</h3>
                                    <ul class="footer-quick-links-4">
                                    
<?php
        if($db->veriSaydir("kurumsal", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("kurumsal", array(), array(), "row", "ASC",6);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

		      <li><a href="kurumsal-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
                          <?php }} ?>
									 </ul>
                                </div>
                            </div>
                              <div class="col-md-6 col-xs-12">
                                <div class="mt_contact_ftr">
                                    <h3>Eğitimlerimiz</h3>
                                    <ul class="footer-quick-links-4">
                                        
<?php
        if($db->veriSaydir("egitimlerimiz", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("egitimlerimiz", array(), array(), "row", "ASC",6);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

		      <li><a href="egitim-<?=$rows->url;?>.html"><?=$rows->isim;?></a></li>
                          <?php }} ?>                         </ul>
                                </div>
                            </div>
                             </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="mt_footer_copy">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copy_txt">
                            <p class="mar-0 white">&copy; Copyright 2018  - Her Hakkı Saklıdır</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="follow_us pull-right">
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
        </div>
    </footer>
    <!--* End Footer*-->

    <!-- back to top -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="" data-placement="left">
        <span class="fa fa-arrow-up"></span>
    </a>
	
	<div style="width:300px;position:fixed;    top: 90%;left: 10px;z-index:99999;font-size:12px;">
		<a href="https://api.whatsapp.com/send?phone=<?=$db->ayarlar("value" , "whatsapp");?>" target="_blank">
			<img style="width:50px;" src="whatsapp.png" alt="whatsapp">
		</a>
	</div>

