<?php 
include '_site_vars.php';
echo ('
<div class="nav-container">
  <div class="cont-contain">
   <a href="index.php"><img src="' . $logo . '" alt="logo">
    <nav class="nav">
      <ul class="nav-ul">
      ');

foreach ($nav_link as $key=>$link) {
	echo '<a href="' . $link .'"><li class="nav-ul-link">' . $key . '</li></a>';
}

echo ('
      </ul>
    </nav>
  </div>
</div>
');
?>
