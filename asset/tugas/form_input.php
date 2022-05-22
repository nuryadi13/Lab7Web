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
</body>
</html>