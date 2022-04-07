<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">

<style>
    P{
        font-family: 'Sarabun', sans-serif;
        font-size:50pt;
    }
</style>

<?php

require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";


$name="ภูมินทร์    อุปนันท์";
$idcard="๑ ๕๐๐๒ ๐๐๑๐๕ ๐๓ ๙";


$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/tmp',
    ]),
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew-Italic.ttf',
            'B' => 'THSarabunNew-Bold.ttf',
            'BI' =>'THSarabunNew-BoldItalic.ttf',
        ]
    ],
    'format' => [210, 330],
    'default_font' => 'sarabun'
]);

$mpdf->AddPage('P');
$mpdf->SetFont('sarabun','R');
$mpdf->SetFontSize(16);
$mpdf->SetXY(125, 50);
$mpdf->WriteCell(0,5,'สบปราบ',0,1);
$mpdf->SetXY(85, 58);
$mpdf->WriteCell(0,5,'๑',0,1,'L');
$mpdf->SetXY(110, 58);
$mpdf->WriteCell(0,5,'เมษายน',0,1);
$mpdf->SetXY(165, 58);
$mpdf->WriteCell(0,5,'๒๕๖๕',0,1);

$mpdf->SetXY(68, 66);
$mpdf->WriteCell(0,5,'๑',0,1,'L');
$mpdf->SetXY(110, 66);
$mpdf->WriteCell(0,5,'๙๙',0,1);
$mpdf->SetXY(165, 66);
$mpdf->WriteCell(0,5,'๒๕๖๖',0,1);

$mpdf->SetFont('sarabun','B');
$mpdf->SetFontSize(20);
$mpdf->SetXY(100, 75);
$mpdf->Cell(90,10,$name,0,1);

$mpdf->SetFont('sarabun','R');
$mpdf->SetFontSize(18);
$mpdf->SetXY(90, 90);
$mpdf->WriteCell(0,5,$idcard,0,1);



$mpdf->Output();

?>
