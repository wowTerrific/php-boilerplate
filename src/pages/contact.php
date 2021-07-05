<?php 
$meta_descripiton = '';
$meta_keywords = '';
$page_title = 'Contact | Template';

$phone_number = '(555) 555-5555';
$email_address = 'example@example.com';
$mail_address = '123 Sample St.';
$city = 'Indianapolis';
$state = 'IN';
$zip = '46077';

?>
<!DOCTYPE html>
<html>
<head>
<?php 
include 'components/meta.php';

?>


</head>
<body>
<?php 
include 'components/header.php';
?>

  <div class="body-cont">
	<h1>Contact</h1>
	<h2>Send Us a Message</h2>
	<p>Fill out our form to contact our team.<p>
  </div>

<?php
include 'components/footer.php';
?>
</body>
</html>
