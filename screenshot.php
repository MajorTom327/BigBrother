<?
$cam = $_GET['cam'];
$file = "http://scam.42.fr/cams/cam-$cam.jpg";
header('Content-Type: application/force-download');
//var_dump($file);
header('Content-Disposition: attachment; filename='.basename($file));
header('Content-disposition: filename="screenshot.png"');
readfile($file);
header("Location: ./cam.php?cam=$cam");
?>
