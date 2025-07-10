

<?php

if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";  

    $file_name = $_FILES["image"]['name'];
    $file_tmp = $_FILES["image"]['tmp_name'];
    $file_size = $_FILES["image"]['size'];
    $file_type = $_FILES["image"]['type'];

    // upload kartay time temporary name lay tay hain
    move_uploaded_file($file_tmp, "upload-images/".$file_name);
}

?>
<html>
    <body>
        <form action= "" method="post"  enctype= "multipart/form-data">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="file" name="image">
            <input type="submit">
        </form>
</body>
    </html>