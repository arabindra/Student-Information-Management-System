<?php
$message="";
$target_dir = "stdimage/";
$target_file = $target_dir .  date('Y_m_d_H_i_s') . '_'. $_FILES["userimage"]["name"];
$allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "gif"
    );    
$file_extension = strtolower(pathinfo($_FILES["userimage"]["name"], PATHINFO_EXTENSION));


if (file_exists($_FILES["userimage"]["tmp_name"])) {
	if (! in_array($file_extension, $allowed_image_extension)) {
         $message="Please upload image only having extensions .jpeg/.jpg/.png/.gif";
         echo $message;
	}	
	else {
	    if (move_uploaded_file($_FILES["userimage"]["tmp_name"], $target_file)) {
	    $message="Upload sucess";
		echo $message;
	    }
    }
}
else{
	echo "image not exist";
}
?>
