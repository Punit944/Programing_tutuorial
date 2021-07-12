<?php
if($_SERVER['REQEST_METHOD']== 'POST');
{ 
 $target_dir = "uploads/";
 $target_file = $tatget_dir.basename($_FILES["fileToUpload"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATINFO_EXTENSION));

 //Check if image file is actual image of fake image

 if(isset($_POST["submit"]))
 {
     $check = getimagesize($_FILES["fileToUpload"]["tamp_name"]);
     if($check!==false)
     {
         echo "file is an image - ".$check[mine].".";
         $uploadOk = 1;
     }
     else
     {
         echo "File is not an image.";
         $uploadOk = 0; 
     }
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="file_upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="UploadImage" name="submit">
    </form>

</body>
</html>