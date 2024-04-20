<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <form method="post" enctype="multipart/form-data"class="text-center" >
        <input type="file" name="mostafa"class="mb-3 mt-5">
        <br>
        <input type="submit"class="mt-3 btn btn-danger">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
if (file_exists ("files/" . $_FILES["mostafa"]["name"])) {
echo "upload a file before upload another";
} else if ($_FILES["mostafa"]["size"] / 1034 / 1034 > 2) {
    echo "upload files less than 2 mb";
    }else if ($_FILES["mostafa"]["type"]=="image/jpeg" || $_FILES["mostafa"]["type"]=="image/png" ){
  move_uploaded_file($_FILES["mostafa"]["tmp_name"],"files/" . $_FILES["mostafa"]["name"]);
 echo "uploaded successfully.";
    }
    else{
      echo "upload from type jpg or png.";
    }
    }
    ?>
</body>
</html>