<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Store</h3>

    <form action="" method="post" enctype="multipart/form-data">
         <input type="file" name="userProfile" id="">
         <br class="mt-5 p-5"><br>
         <input type="submit" value="Save" name="storeProfile" id="">
    </form>

    <?php
        if (isset($_POST['storeProfile'])) {
            echo "<pre>";
            // print_r($_FILES);

            $imgName = $_FILES['userProfile']['name'];
            $tmpName = $_FILES['userProfile']['tmp_name'];
            // print_r($imgName);
            // print_r($tmpName);

            $targetFile = 'image/'. $imgName;
            // move_uploaded_file($tmpName,$targetFile);

            if (move_uploaded_file($tmpName,$targetFile)) {
              move_uploaded_file($tmpName,$targetFile);
               echo "Success Uploading ...";
            }else{
                echo "Error !!!";
            }

           


        }

    ?>
</body>
</html>