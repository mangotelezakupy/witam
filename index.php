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
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas laoreet nunc turpis, eu malesuada justo fringilla vitae. Aenean quam lacus, ornare tincidunt placerat ut, facilisis in magna. Suspendisse id elit volutpat, fermentum lorem at, vehicula lorem. Praesent accumsan erat eget faucibus auctor. Nulla facilisi. Maecenas fermentum, ex non dignissim lobortis, nisi nisl condimentum neque, sit amet scelerisque mi lorem eget nisi. Duis quis magna eget massa ullamcorper ornare. Quisque euismod cursus bibendum. Aliquam et nibh turpis.

Donec accumsan finibus eleifend. Sed sagittis felis orci, a semper magna posuere vitae. Nullam condimentum augue eget sodales tempor. Etiam gravida mattis tellus, et mollis nisi semper et. Mauris at sem non enim mattis tincidunt. Ut condimentum ornare malesuada. Mauris dui risus, placerat et tincidunt a, ultricies eget ipsum. In tincidunt ullamcorper lorem, at pellentesque nisi tincidunt non. Vivamus rutrum arcu et sem molestie, eu maximus tortor tincidunt. Ut non arcu ut urna sodales blandit ut sit amet velit. Phasellus accumsan scelerisque felis, eget scelerisque ipsum blandit vehicula. Pellentesque urna purus, viverra sit amet ante at, faucibus consectetur urna. Maecenas tincidunt maximus purus ac volutpat. Aliquam accumsan congue lacus, in consequat enim pretium nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Cras cursus quam a velit dignissim imperdiet. Nulla facilisi. Aliquam vitae est tristique, vehicula odio a, egestas lectus. Nam orci nisi, hendrerit a augue vitae, rhoncus placerat dolor. Pellentesque semper tempus commodo. Nunc vestibulum molestie porttitor. Integer eget diam odio. Mauris eu facilisis massa.

Sed porttitor lacinia dignissim. Sed bibendum, lorem eu sollicitudin elementum, augue enim tempus odio, at condimentum justo mauris sagittis diam. Maecenas in commodo magna. Suspendisse potenti. Quisque tempor purus non lectus sagittis, nec faucibus ex tristique. Curabitur facilisis consectetur eros at euismod. Pellentesque euismod posuere purus id tincidunt. Donec ut accumsan elit. Aenean lacinia tortor cursus purus varius ullamcorper. Duis consequat nisi porta dapibus vestibulum. Mauris ac dapibus lorem.

In fringilla magna sit amet magna euismod pharetra. Sed consectetur justo at nulla tristique varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu pellentesque sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque sed semper magna, vel lacinia tellus. Nullam risus mauris, commodo quis tincidunt a, interdum sit amet lorem. Integer vitae tincidunt ligula, in consequat urna.


</div>
<div id="lewy">
    menu
    </div>
    <form action="#" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="file" id="file">
  <input type="submit" value="Upload File" name="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES["file"])) {
        $filename = $_FILES["file"]["name"];
        // Check whether file exists before uploading it
        if (file_exists("upload" . $filename)) {
            echo $filename . " already exists.";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename);
            echo "Your file was uploaded successfully.";
        }
    } else {
        echo "No file selected.";
    }
}
?>

</div>

<div id="stopka">
© 2023 - 2024 Adak development
</div>
</body>
</html>
