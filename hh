// Coded by @Pyfiglet Telegram: @Py_figlet
// پاک کردن اسم و منبع درج شده بیناموسیتو نشون میده
<?php
$target_dir = "uploads/"; // آدرس ذخیره فایل های آپلود شده
$target_file = $target_dir . basename($_FILES["bill"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// آیا فایل واقعاً یک تصویر است یا سرقت
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["bill"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// آیا فایل از قبل وجود دارد؟
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// آیا حجم فایل مجاز است؟
if ($_FILES["bill"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// پسوند فایل مجاز است؟
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
// آیا $ uploadOk تغییر نکرده است که به نوبه خود برچسب gصحیح.}"";
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// اگر همه چیز درست باشد، فایل را آپلود کنید
} else {
  if (move_uploaded_file($_FILES["bill"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["bill"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
