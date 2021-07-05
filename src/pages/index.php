<?php 
$meta_descripiton = 'This is the meta description';
$meta_keywords = 'Keyword 0, keyword 1, keyword 2';
$page_title = 'Sample Page Title';

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
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<p>Here is a paragraph.</p>
  </div>

<?php
include '../components/footer.php';
?>
</body>
</html>
