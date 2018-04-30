<?php


$id=$_GET['q'];
$target_dir = "../images/";
$target_file = $target_dir . $id . ".jpg";
$uploadOk = 1;
echo $target_file;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profile_photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      
		echo "<script>alert('File is not an image.')</script>";
        $uploadOk = 0;
		echo '<script>parent.window.location.reload(true);</script>';
    }
}
// Check if file already exists

// Check file size
if ($_FILES["profile_photo"]["size"] > 500000) {
    
	echo "<script>alert('Sorry, your file is too large.')</script>";
    $uploadOk = 0;
	echo '<script>parent.window.location.reload(true);</script>';
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	echo '<script>parent.window.location.reload(true);</script>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo '<script>parent.window.location.reload(true);</script>';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["profile_photo"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["profile_photo"]["name"]). " has been uploaded.";
		echo "<script>alert('Your photo is successfully uploaded.')</script>";
		echo '<script>parent.window.location.reload(true);</script>';
    } else {
        echo '<script>alert(\'Sorry, there was an error uploading your file.\')</script>';
		echo '<script>parent.window.location.reload(true);</script>';
    }
}
?>