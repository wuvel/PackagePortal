<?php

$listAkun = "";
$abc = fopen("tokenPP.txt", "r");
while (($line = fgets($abc)) !== false) {
    $handle = explode("|", $line);
    $email = $handle[0];

    echo("Masukkan wallet untuk email ").$email.": ";
    $wallet = trim(fgets(STDIN));

    $listAkun .= trim($handle[0])."|".trim($handle[1])."|".trim($wallet)."\n";

}

file_put_contents('hasil.txt', $listAkun, FILE_APPEND);

//Acc
$listAcc = "";
$abcd = fopen("akunPortalPackageNew.txt", "r");
while (($line = fgets($abcd)) !== false) {
    $handle = explode("|", $line);
    $listAcc .= trim($handle[0])."|".trim($handle[1])."\n";

}

file_put_contents('scan/accounts.txt', $listAcc, FILE_APPEND);
?>