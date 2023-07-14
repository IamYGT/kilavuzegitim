<?php

include("include/top.php");

include("header.php");

	?>



 <form style="    margin-left: 33%;" action="<?php print $PHP_SELF?>" enctype="multipart/form-data" method="post">
Dosya İsmi:<br /> <input type="text" name="name" value="" /><br />
Dosya Yükle:<br /> <input type="file" name="classnotes" value="" /><br />
	<input type="submit" name="submit" value="Gönder" />
</form>

<?php
 define ("filesplace","../uploads");

 if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {

 if ($_FILES['classnotes']['type'] != "application/pdf") {
 echo "<p>Class notes must be uploaded in PDF format.</p>";
 } else {
 $name = $_POST['name'];
 $result = move_uploaded_file($_FILES['classnotes']['tmp_name'], filesplace."/$name.pdf");
 if ($result == 1) echo "<p>yüklendi link:  <h1> http://relassay.com/uploads/".$name.".pdf </h1> </p>";
 else echo "<p>Sorry, Error happened while uploading . </p>";
} #endIF
 } #endIF
?>


 <?php include("footer.php");?>
