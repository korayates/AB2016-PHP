<?php
$notlar = array("koray"=>50,"cagatay"=>30);

$miniumDeger= min($notlar);#minimum deðeri bulduk.
$maximumDeger= max($notlar);#maximum deðeri bulduk.

arsort($notlar);#Büyükten küçüðe sýraladýk.
$gecici=0;
$ort=array_sum($notlar)/count($notlar);#dizideki elemanlarýn toplamýný eleman sayýsýna böldük.
echo "======Sýralanmýs Hali=====<br>";

foreach ($notlar as $isim=>$not) {
    //echo $isim."=".$not."<br>";
    echo "$isim =$not<br> ";
    $gecici+=pow(($not-$ort),2);#standart sapmanýn bir adýmý tamamlandý.
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