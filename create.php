<?php

$public = "./public/";
$pages = "./src/pages";

// loop through src/pages 

foreach( glob( $pages . "*.PHP", GLOB_ONLYDIR) as $filename ) {
  echo $filename . "\n";
}

// create/open file if it exists and write/update

