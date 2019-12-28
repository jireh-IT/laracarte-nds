<?<?php 

function page_title($title){
	$base_title = "Laracarte - list of Artisans";
if ($title =="") {
	return $base_title;
} else {
	return $title.' | '. $base_title;
}

}

 ?>