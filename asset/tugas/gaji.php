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