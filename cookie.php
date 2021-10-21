<?php
date_default_timezone_set('Asia/Kuala_Lumpur');
$masa_exp = time() + 30;#30 in seconds

setcookie('nama_pelajar', 'Abdullah', $masa_exp);

header('location: papar.php');
