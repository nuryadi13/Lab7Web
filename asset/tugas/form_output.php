<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><? echo $_POST['nama'] ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><? echo $_POST['tanggal_lahir'] ?></td>
</tr>
    <td>Umur</td>
    <td>:</td>
        <td><?php include 'tugas/umur.php'  ?> Tahun</td>
    </tr>
    <tr>
        <td>pekerjaan</td>
        <td>:</td>
        <td><? echo $_POST ['pkj'] ?></td>
    </tr>
    <tr>
        <td>Gaji</td>
        <td>:</td>
        <td>Rp.<?php include 'tugas/gaji.php' ?> /Bulan</td>
    </tr>
</table>