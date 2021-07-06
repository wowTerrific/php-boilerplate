<?php

$public = "public/";
$pages = "src/pages/";

// loop through src/pages 
foreach(glob('src/pages/*.php') as $filename) {
  if ($filename !== 'src/pages/page-template.php') {
	  
	 shell_exec('php ' . $filename . ' >> test/'. substr($filename, 10));
  }
}

// create/open file if it exists and write/update

