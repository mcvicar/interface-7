<?php

$this_dir = "./";
$Dir = date("Ymd");

$handle = opendir($this_dir);
     while (($file = readdir($handle))!=false) {
if ($file != "." && $file != ".." && $file < $Dir) { 
          if (!strstr("$file",".") > 0) {
	$handled = opendir($file);
	while (($filed = readdir($handled))!=false) {
		 if (!strstr("$filed",".") > 0) {
		} else {
			if ($filed == "explain.txt"){
			//open the explain file and print it out
			$theExplain = file("$this_dir$file/explain.txt");
               echo "<a href=\"$this_dir$file/\">$file</a>  :: ";
			for ($i = 0; $i <= count($theExplain) - 1; $i++) {      
			   print $theExplain[$i];                                  }
			}
          }
}
     }
	 }
	 }
closedir($handle);
?>