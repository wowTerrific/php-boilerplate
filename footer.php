<?php 
include 'navlinks.php';

echo ('
<div class="footer-container">
  <div class="cont-contain">
   <a href="index.php"><img src="' . $logo . '" class="footer-logo" loading="lazy" alt="logo"></a>
    <footer class="footer">
      <ul class="footer-ul">
      ');

foreach ($footer_link as $key=>$link) {
	echo '<a href="' . $link .'"><li class="footer-ul-link">' . $key . '</li></a>';
}

echo ('
      </ul>
    </footer>
  </div>
</div>
');
?>
