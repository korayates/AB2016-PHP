<?php
$notlar = array("koray"=>50,"cagatay"=>30);

$miniumDeger= min($notlar);#minimum de�eri bulduk.
$maximumDeger= max($notlar);#maximum de�eri bulduk.

arsort($notlar);#B�y�kten k����e s�ralad�k.
$gecici=0;
$ort=array_sum($notlar)/count($notlar);#dizideki elemanlar�n toplam�n� eleman say�s�na b�ld�k.
echo "======S�ralanm�s Hali=====<br>";

foreach ($notlar as $isim=>$not) {
    //echo $isim."=".$not."<br>";
    echo "$isim =$not<br> ";
    $gecici+=pow(($not-$ort),2);#standart sapman�n bir ad�m� tamamland�.
}
$standartSapma=sqrt($gecici/(count($notlar)-1));
echo "====Ortalama====<br>";
echo $ort."<br>";
echo "====Maximum Deger====<br>";
echo "$maximumDeger<br>";

echo "=====Minimum Deger=====<br> $miniumDeger<br>";
echo "======Standart Sapma=======<br>";


echo $standartSapma."<br>";
?>