<?php
print_r($_FILES); //this will print out the received name, temp name, type, size, etc.
print_r($_POST);

$size = $_FILES['audio_data']['size']; //the size in bytes
$input = $_FILES['audio_data']['tmp_name']; //temporary name that PHP gave to the uploaded file
$id = $_POST['id'];
// $output = basename(str_replace(".", "", $_FILES['audio_data']['name']) . ".wav"); //letting the client control the filename is a rather bad idea
$output = time();
$destination = "recordings/";
// chown($destination, 0755);
//move the file from temp name to local folder using $output name
move_uploaded_file($input, $destination . $id . ".wav");
