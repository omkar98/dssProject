<?php 
$qrCodeDelete = filter_input(INPUT_POST, 'qrCode', FILTER_SANITIZE_STRING); 

$statusMsg = '';
$backlink = ' <a href="form.php">Go back</a>';
// File upload path
$targetDir = "assets/images/Team/";
$file = glob($targetDir . '*');
if($qrCodeDelete == 'yes') {
  unlink($targetDir."QRCode.jpeg");
  echo "Deleted Old QR Code.";
}

$fileName = basename($_FILES["file"]["name"]);
$extension = explode(".", $_FILES["file"]["name"]);
$targetFilePath = $targetDir . "QRCode" . "." . "jpeg";
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
  // Allow certain file formats
  $allowTypes = array('jpg', 'png', 'jpeg');
  if (in_array($fileType, $allowTypes)) {
    // Upload file to server
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
      $statusMsg = "File Uploaded successfully!" . $backlink;
    } else {
      $statusMsg = "Sorry, there was an error uploading your file." . $backlink;
    }
  } else {
    $statusMsg = "Sorry, only JPG, JPEG, PNG files are allowed to upload." . $backlink;
  }
} else {
  $statusMsg = 'Please select a file to upload.' . $backlink;
}
// Display status message

echo $statusMsg;
?>
