<?php
header("Content-Type: image/png");

$tipe = $_GET['tipe'] ?? 'foto';

if ($tipe == 'header') {
    $lebar = 850;
    $tinggi = 120;
    $img = imagecreatetruecolor($lebar, $tinggi);
    $bg = imagecolorallocate($img, 30, 58, 138);
    $warna_teks = imagecolorallocate($img, 255, 255, 255);
    imagefill($img, 0, 0, $bg);
    imagestring($img, 5, 310, 52, "WEBSITE PORTOFOLIO PRIBADI", $warna_teks);
} elseif ($tipe == 'footer') {
    $lebar = 850;
    $tinggi = 50;
    $img = imagecreatetruecolor($lebar, $tinggi);
    $bg = imagecolorallocate($img, 30, 58, 138);
    $warna_teks = imagecolorallocate($img, 255, 255, 255);
    imagefill($img, 0, 0, $bg);
    imagestring($img, 4, 300, 17, "Copyright 2026 - Latihan 6 PHP", $warna_teks);
} else {
    $lebar = 150;
    $tinggi = 150;
    $img = imagecreatetruecolor($lebar, $tinggi);
    
    $no = intval($_GET['no'] ?? 1);
    $warna = array(
        1 => array(37, 99, 235),
        2 => array(22, 163, 74),
        3 => array(234, 88, 12),
        4 => array(220, 38, 38),
        5 => array(147, 51, 234),
        6 => array(219, 39, 119)
    );
    $rgb = $warna[$no] ?? array(71, 85, 105);
    
    $bg = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);
    $warna_teks = imagecolorallocate($img, 255, 255, 255);
    $garis = imagecolorallocate($img, 255, 255, 255);
    
    imagefill($img, 0, 0, $bg);
    imagerectangle($img, 5, 5, 144, 144, $garis);
    imagestring($img, 5, 48, 68, "FOTO " . $no, $warna_teks);
}

imagepng($img);
imagedestroy($img);
?>
