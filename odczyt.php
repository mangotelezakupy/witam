<!DOCTYPE html>
<html lang="PL=pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="cs.css">
</head>
<body>
<div id="baner">
    menu<br>
    <a href="main.php">upload</a> 
    <a href="odczyt.php">odczyt</a> 
</div>

<div id="main">
<?php
$dir = "upload";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      if($file != "." && $file != "..") {
        echo "<a href='$dir/$file' download>$file</a><br>";
      }
    }
    closedir($dh);
  }
}
?>
</div>
<div id="lewy">
    menu
    </div>

</div>

<div id="stopka">
© 2023 - 2024 Adak development
</div>
</body>
</html>