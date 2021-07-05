<?php 
$meta_descripiton = '';
$meta_keywords = '';
$page_title = 'Contact | Template';

include '../components/_site_vars.php';
?>
<!DOCTYPE html>
<html>
<head>
<?php 
include '../components/meta.php';

?>


</head>
<body>
<?php 
include '../components/header.php';
?>

  <div class="body-cont">
	<h1>Contact</h1>
	<h2>Send Us a Message</h2>
	<p>Fill out our form to contact our team.<p>
	
<?php
include '../non-static/form_main.php';
?>
  </div>

<?php
include '../components/footer.php';
?>
</body>
</html>
