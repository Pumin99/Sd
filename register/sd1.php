<?php
// Require composer autoload
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";

        use App\Model\Register;
        
        $registerobj = new Register();

        $register=$registerobj->getRegisterById($_REQUEST['id']);
        // print_r($register);
  
        $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];
        
        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        
        $mpdf = new \Mpdf\Mpdf([
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . '/tmp',
            ]),
            'fontdata' => $fontData + [
                'sarabun9' => [
                    'R' => 'THSarabunIT9.ttf',
                    'I' => 'THSarabunIT9Italic.ttf',
                    'B' => 'THSarabunIT9Bold.ttf',
                    'BI' =>'THSarabunIT9BoldItalic.ttf',
                ]
            ],
            'format' => [210, 330],
            'default_font' => 'sarabun9'
        ]);

        function textFormat( $text = '', $pattern = '', $ex = '' ) {
            $cid = ( $text == '' ) ? '0000000000000' : $text;
            $pattern = ( $pattern == '' ) ? '_-____-_____-__-_' : $pattern;
            $p = explode( '-', $pattern );
            $ex = ( $ex == '' ) ? '-' : $ex;
            $first = 0;
            $last = 0;
            for ( $i = 0; $i <= count( $p ) - 1; $i++ ) {
               $first = $first + $last;
               $last = strlen( $p[$i] );
               $returnText[$i] = substr( $cid, $first, $last );
            }
            return implode( $ex, $returnText );
         }

        $idcard=textFormat($register[idcard],'_-____-_____-__-_','-');
        
        $mpdf->AddPage('P');
        $mpdf->SetFont('sarabun9','R');
        $mpdf->SetFontSize(16);
        $mpdf->SetXY(125, 50);
        $mpdf->WriteCell(0,5,$register['district'],0,1);
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
        
        $mpdf->SetFont('sarabun9','B');
        $mpdf->SetFontSize(20);
        $mpdf->SetXY(100, 75);
        $mpdf->Cell(90,10,$register['name']."    ".$register['surname'],0,1);
        
        $mpdf->SetFont('sarabun9','R');
        $mpdf->SetFontSize(18);
        $mpdf->SetXY(90, 90);
        $mpdf->WriteCell(0,5,$idcard,0,1);
        
        
        
        $mpdf->Output();

?>