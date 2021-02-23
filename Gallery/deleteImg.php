<?php
session_start();
include_once 'dbh.php';
//$sessionid = $_SESSION['idGallery'];
$id = $_SESSION['idGallery'];

$filename = '../Images/GalleryImg/'.$id."*";
$fileinfo = glob($filename);
$fileext = explode(".", $fileinfo[0]);
$fileactualext = $fileext[1];

$file = "../Images/GalleryImg/".$id.".".$fileactualext;

if (!unlink($file)) {
    echo 'File was not deleted';
    header("Location: gallery.php?NotDeleted");

} else {
    echo 'File was deleted';
    header("Location: gallery.php?Deleted");
}
$sql = "DELETE FROM gallery WHERE idGallery = '$id';";
//$sql = "UPDATE gallery SET status=1 WHERE idGallery='$id';";
mysqli_query($conn ,$sql);
print_r($fileext);
