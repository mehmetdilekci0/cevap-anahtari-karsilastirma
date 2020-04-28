<?php

$cevapanahtari = array(
	'1' => 'A',
	'2' => 'B',
	'3' => 'A',
	'4' => 'E',
	'5' => 'A',
	'6' => 'A',
	'7' => 'A',
	'8' => 'C',
	'9' => 'E',
	'10' => 'A',
	'11' => 'C',
	'12' => 'C',
	'13' => 'B',
	'14' => 'B',
	'15' => 'D',
	'16' => 'D',
	'17' => 'C',
	'18' => 'D',
	'19' => 'E',
	'20' => 'C',
);

$cevaplar = array(
	'1' => 'C',
	'2' => 'D',
	'3' => 'B',
	'4' => 'E',
	'5' => 'D',
	'6' => 'A',
	'7' => 'A',
	'8' => 'C',
	'9' => 'E',
	'10' => null,
	'11' => 'C',
	'12' => 'D',
	'13' => 'B',
	'14' => 'B',
	'15' => 'D',
	'16' => 'D',
	'17' => 'C',
	'18' => 'A',
	'19' => 'A',
	'20' => 'C',
);


$toplamsoru = count($cevapanahtari);
$sorudogrupuan = 5;
$kacyanlisgoturur = 4;
$dogrucevap = 0;
$yanliscevap = 0;
$boscevap = 0;

for($i=1; $i<=$toplamsoru; $i++){
	if($cevapanahtari[$i] == $cevaplar[$i]){
		$dogrucevap++;
	}if ($cevapanahtari[$i] != $cevaplar[$i] and $cevaplar[$i] != NULL) {
		$yanliscevap++;
	}if($cevaplar[$i] == NULL){
		$boscevap++;
	}
}

$yanlisgoturdu = $yanliscevap / $kacyanlisgoturur;
$net = $dogrucevap - $yanlisgoturdu;
$puan = $net * $sorudogrupuan;

echo "Her soru " . $sorudogrupuan . " puan<br/>";
echo $kacyanlisgoturur . " yanlış 1 doğruyu götürür.";
echo "<hr>";
echo "Doğru Cevaplar: ".$dogrucevap."<br/>";
echo "Yanlış Cevaplar: ".$yanliscevap."<br/>";
echo "Boş Cevaplar: ".$boscevap."<br/>";
echo "PUAN: ".$puan."<br/>";


