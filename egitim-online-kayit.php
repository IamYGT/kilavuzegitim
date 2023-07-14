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

    <title>Eğitim Online Kayıt - Kılavuz l Kişisel Gelişim Kursu</title>

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
  
  <?php include("ust.php"); ?> 
  
    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Eğitim Online Kayıt</h2>
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
                <li class="active">Eğitim Online Kayıt</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--* Contact*-->
    <section id="mt_contact" class="contact-main section-inner">        
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Kılavuz - Kişisel Gelişim Kursu</h3>
                <h2>Eğitim Online Kayıt.</h2>
            </div>
            
             <div class="contact-inner">
               
                <div class="col-md-12">
                    <div class="contact_form">
					
					
	<?php
		if ($_POST){  
			$isim = $_POST['name']; 
				if (isset($_POST['islem'])) { 
					if ($_POST['mail']<>'' && $_POST['name']<>'' && $_POST['soyad']<>'' && $_POST['sinif']<>'' && $_POST['ogrencitel']<>'' && $_POST['veliad']<>'' && $_POST['velisoyad']<>'' && $_POST['phone']<>'' && $_POST['cars']<>'' && $_POST['message']<>'') { 
						require "admin/include/phpmailer/PHPMailerAutoload.php"; 
						$mail = new PHPMailer;
						// Set PHPMailer to use the sendmail transport
						$mail->IsSMTP(); 
						$mail->SMTPAuth = true;
						$mail->SMTPSecure = "tls";
						$mail->Host = "smtp.yandex.com";
						$mail->Port = 587;
						$mail->Username = "info@kilavuzegitim.com";  //  SMTP sunucuda oturum açabilmek için gerekli mail adresiniz ve
						$mail->Password =  "Ab112233";              //  Mail şifrenizi buraya giriniz
						$mail->From = "info@kilavuzegitim.com";      //  Gönderen mail adresi
						$mail->Fromname = $isim;
						$mail->AddAddress($mail->Username, $isim);
						$mail->SetFrom($mail->Username, $isim);
						$mail->CharSet = "UTF-8";
						$mail->Subject = "Yeni İletişim Formu";
						$content  ="
						Öğrencinin Adı: ".$_POST['name']."<br /> 
						Öğrencinin Soyadı : ".$_POST['soyad']."<br /> 
						Öğrencinin Sınıfı : ".$_POST['sinif']."<br /> 
						Öğrencinin Telefonu : ".$_POST['ogrencitel']."<br /> 
						Velinin Adı: ".$_POST['veliad']."<br /> 
						Velinin Soyadı : ".$_POST['velisoyad']."<br /> 
						Velinin Epostası : ".$_POST['mail']."<br /> 
						Velinin Telefonu : ".$_POST['phone']."<br /> 
  						Bölüm: ".$_POST['cars']."<br />
						Mesaj: ".$_POST['message']." 
						
						"; 
						$mail->MsgHTML($content);
							if(!$mail->Send()){
							   echo '<div class="alert alert-danger"><b>Gönderim Hatası:</b> ' . $mail->ErrorInfo . '</div>';
							   exit;
							}else{
								echo '<div class="alert alert-info"><b>Başarılı: </b> Ön kayıdınız alınmıştır.. En kısa zamanda sizinle irtibata geçeceğiz.</div>';
							}
					} else {
						echo '<div class="alert alert alert-warning"><b>Uyarı:</b> Tüm alanların doğrulması zorunludur.</div>';
					}
				} 

		}  
	?>	
						
						
						
						
						<form action="/egitim-online-kayit" method="post" id="contact_form">
                            <input type="text" name="name" id="name" placeholder="Öğrencinin Adı" required="">
                            <input type="text" name="soyad" id="soyad" placeholder="Öğrencinin Soyadı" required="">
                            <input type="text" name="sinif" id="sinif" placeholder="Öğrencinin Sınıfı" required="">
							<input type="text" name="ogrencitel" id="ogrencitel" placeholder="Öğrencinin Telefonu" required="">
<h4>Velinin Bilgileri:</h4>

                            <input type="text" name="veliad" id="veliad" placeholder="Velinin Adı" required="">
                            <input type="text" name="velisoyad" id="velisoyad" placeholder="Velinin Soyadı" required="">
                            <input type="email" name="mail" id="mail" placeholder="Velinin Epostası" required="">
							<input type="text" name="phone" id="phone" placeholder="Velinin Telefonu" required="">
							
							<select id="cars" name="cars">
					<option value="Seçiniz.." selected>Seçiniz..</option>
					<option value="TEOG">TEOG</option>
					<option value="YGS">YGS</option>
					<option value="LYS">LYS</option>
					<option value="Lise">Lise Ara Sınıflar</option>
					<option value="Ortaokul">Ortaokul</option>
					<option value="İlkokul">İlkokul</option>
</select>



                             <textarea style="height: 140px;" cols="30" rows="5" name="message" id="message" placeholder="Görüş-Açıklama" required=""></textarea>
                            <button class="mt_btn_yellow" type="submit" id="islem" name="islem" id="submit-btn">GÖNDER
                                <span class="mt_load">
                                    <span></span>
                                </span>
                            </button>
                            <div id="msg"></div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <!--* End Contact*-->

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

    <!-- map Jquery --><script src="js\custom-map.js"></script>

    <!-- google map Jquery -->
 
</body>

</html>