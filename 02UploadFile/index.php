<?php
    if (isset($_POST['upload'])) {
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_image, "images/".$image);
        print_r($_FILES['image']);
        echo "Upload success";
    }
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit" value="UploadFile" name="upload" />
</form>

</body>
</html>