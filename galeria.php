<?php
$dir = "Portifolio_fotografia/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      $ext = pathinfo($file, PATHINFO_EXTENSION);
      if ($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "gif"){
        echo "<a href=\"$dir/$file\"><img src=\"$dir/$file\" alt=\"$file\"></a>";
      }
    }
    closedir($dh);
  }
}
?>