<?php
echo $ogloszenie->Tytul; // itd
echo "<hr>";
// przykladowe wyswietlenie parametrow ogloszenia, tez przeniesc do widoku
foreach ($parametry_ogloszenia as $parametr) {
    echo "<b>{$parametr->Atrybut}</b> - {$parametr->Wartosc} <br>";
}
foreach ($zdjecia_byid as $zdjecia) {
    $zdj = $zdjecia->zdjecie; ?>
     <img src="<?=base_url($zdj)?>" height="200" width="200">
<?php
}
?>