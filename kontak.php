<h3>Hubungi Saya</h3>
<form method="POST" action="">
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td width="25%">Nama Pengirim</td>
            <td width="2%">:</td>
            <td><input type="text" name="pengirim" size="30" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" size="30" required></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td><textarea name="pesan" rows="4" cols="35" required></textarea></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="kirim_pesan" value="Kirim Pesan">
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST["kirim_pesan"])) {
    $pengirim = htmlspecialchars($_POST["pengirim"]);
    $email = htmlspecialchars($_POST["email"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    echo "<br><table width='100%' border='1' cellpadding='5' cellspacing='0' bgcolor='#dbeafe'>";
    echo "<tr><th>Pesan Berhasil Terkirim!</th></tr>";
    echo "<tr><td><b>Dari:</b> $pengirim ($email)<br><b>Isi Pesan:</b> $pesan</td></tr>";
    echo "</table>";
}
?>
