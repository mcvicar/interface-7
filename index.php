<?php
error_reporting(0);

$Dir = date("Ymd");

$path = "./$Dir";

if ($path != "." && $path != "..")
{
if (is_dir($path))
{
$X = $path;
}
else
{
// last update 
$newFile="";

$handle=opendir('.'); // open dir 
while (false!==($file = readdir($handle))) {  
if ($file != "." && $file != ".." && $file < $Dir) {  

if (is_dir($file)) {

$fileDate = filectime($file);
$newDate = filectime($newFile); // get date from newFile 

if ($newDate < $fileDate) { 
$newFile = $file;  
			}
					} 
					} 
								} 

closedir($handle); // close file 

$newDate = filectime($newFile); // get date from newFile 
$fileModDate = date("d/m/Y",$newDate); // convert date 
$X = "./$newFile";
}
}
header ("Location: $X");
?>