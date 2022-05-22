<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Jawaban Tugas</title>
</head>
<body>
<h1>Program PHP Sederhana</h1>
    <form method="post" action="<?php echo $_SERVER ['PHP_SELF'];?>">
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir"><br></td>
    </tr>
    <tr>
        <td>pekerjaan</td>
        <td>:</td>
        <td>
            <select name="pkj" autofocus>
            <option>--Select--</option>
            <option value="Marketing">Marketing</option>
            <option value="Buruh">Buruh</option>
            <option value="Guru">Guru</option>
</select>
</td>
</tr>
<td><input type="submit"></td>
</tr>
</table>
</form>
<?php
$tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
$now = new DateTime("today");
if ($tanggal_lahir >

<?php
$pkj = $_POST ['pkj'];
if ($pkj == 'Marketing'){
    $gaji = 15000000;
}elseif ($pkj == 'Buruh'){
    $gaji = 6000000;
}elseif ($pkj == 'Guru'){
    $gaji = 4000000;
}else{
    $gaji= 0;
}
$gaji = number_format ($gaji,2);
echo $gaji;
?>
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
</body>
</html>