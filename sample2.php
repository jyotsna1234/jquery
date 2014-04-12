<?php
ini_set('display_errors',1);
$content="";
 $count=0;
$file = fopen("sample.php", "r+") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
  {
  $content= fgets($file)."<br>";
     if(preg_match('((?:#|//)[^\r\n]*|\*(.|[\r\n])*\*)', $content)&&!preg_match('".*#.*"',$content))
	 {
	 	$count++;
	 } 
  
 echo $count; 
  }
   
?>