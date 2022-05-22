<?php
$tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
$now = new DateTime("today");
if ($tanggal_lahir > $ now)  {
    $umur = "0";
}
$umur = $now->diff($tanggal_lahir)->y;
echo $umur;
?>
