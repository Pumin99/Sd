<link href="https://fonts.googleapis.com/css?family=Sarabun&;display=swap" rel="stylesheet">

<?php
// Require composer autoload
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";


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
            'B' => 'THSarabunNewBold.ttf',
            'I' => 'THSarabunNewItalic.ttf',
            'BI' => 'THSarabunNewBoldItalic.ttf',
        ]
    ],
    'default_font_size' => 16,
    'default_font' => 'sarabun'
]);

?>

<?php


$mpdf->WriteHTML('<div style="position: fixed; top: 65mm; left: 110mm; width: 100mm;">หมายเลขประชาชน</div>');



$mpdf->Output();

?>