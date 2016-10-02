<?php

// https://packagist.org/packages/milon/barcode
namespace tumba;

use App\Kernel\Test2;
use Inline\PDF\PDF;
use WWW\Test2 as Test;
use \Milon\Barcode\DNS1D;

$d = new DNS1D();
$d->setStorPath(__DIR__."/cache/");

$pdf = new PDF('/usr/bin/wkhtmltopdf');

echo $pdf->loadHTML($d->getBarcodeHTML("9780691147727", "EAN13", 4, 50, '#369'))->get();


//require "controllers/example/test2.php";
//require "controllers/example/test3.php";
//
//function foo(){
//    echo "tumba\\foo";
//}
//
//new Test2();
//new Test();
//
//new \Core\foo\bar\Test();
