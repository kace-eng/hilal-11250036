<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Portofolio Pribadi</title>
</head>
<body bgcolor="#e9ecef">

<table width="850" align="center" border="1" cellpadding="8" cellspacing="0" bgcolor="#ffffff">
    <!-- HEADER -->
    <tr>
        <td colspan="2" align="center" bgcolor="#1e3a8a">
            <img src="data:image/svg+xml;utf8,<svg xmlns='http://w3.org' width='850' height='110'><rect width='100%' height='100%' fill='%231e3a8a'/><text x='50%' y='55%' font-family='Arial' font-size='28' font-weight='bold' fill='white' text-anchor='middle'>WEBSITE PORTOFOLIO PRIBADI</text></svg>" width="100%" alt="HEADER">
        </td>
    </tr>

    <!-- BARIS TANGGAL -->
    <tr bgcolor="#dbeafe">
        <td colspan="2" align="right">
            <small>Hari ini: <b><?php echo date("l, d F Y"); ?></b></small>
        </td>
    </tr>

    <!-- MENU & KONTEN -->
    <tr>
        <td width="22%" valign="top" bgcolor="#f8fafc">
            <table width="100%" border="1" cellpadding="6" cellspacing="0">
                <tr>
                    <th bgcolor="#1e3a8a"><font color="#ffffff">MENU UTAMA</font></th>
                </tr>
                <tr>
                    <td><a href="index.php">Beranda</a></td>
                </tr>
                <tr>
                    <td><a href="index.php?menu=cv">CV / Biodata</a></td>
                </tr>
                <tr>
                    <td><a href="index.php?menu=kerja">Portofolio</a></td>
                </tr>
                <tr>
                    <td><a href="index.php?menu=foto">Galeri Foto</a></td>
                </tr>
                <tr>
                    <td><a href="index.php?menu=kontak">Kontak</a></td>
                </tr>
            </table>
        </td>
        <td valign="top" height="350">
            <?php
            $menu = $_GET['menu'] ?? "";

            if ($menu == "cv") {
                include "cv.php";
            } elseif ($menu == "kerja") {
                include "portofolio.php";
            } elseif ($menu == "foto") {
                include "galeri.php";
            } elseif ($menu == "kontak") {
                include "kontak.php";
            } else {
                include "beranda.php";
            }
            ?>
        </td>
    </tr>

    <!-- FOOTER -->
    <tr>
        <td colspan="2" align="center" bgcolor="#1e3a8a">
            <img src="data:image/svg+xml;utf8,<svg xmlns='http://w3.org' width='850' height='45'><rect width='100%' height='100%' fill='%231e3a8a'/><text x='50%' y='60%' font-family='Arial' font-size='14' fill='white' text-anchor='middle'>Copyright 2026 - Tugas Latihan 6 PHP</text></svg>" width="100%" alt="Footer">
        </td>
    </tr>
</table>

</body>
</html>
