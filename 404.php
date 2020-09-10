<?php 
$meta_descripiton = '';
$meta_keywords = '';
$page_title = '404';
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
    <div class="fof-cont">
      <h1>404</h1>
      <p>Looks like this page doesn't exist. </p>
      <a href="javascript:history.back()">
        <button>Previous Page</button>
      </a>
    </div>
  </div>
<?php 
include 'components/footer.php';

?>
</body>
</html>
