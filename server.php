<?php
ini_set('memory_limit', '2048M');

require_once 'vendor/autoload.php';

use Codewithkyrian\Transformers\Utils\Image;
use Codewithkyrian\Transformers\Utils\ImageDriver;
use function Codewithkyrian\Transformers\Pipelines\pipeline;
use Codewithkyrian\Transformers\Transformers;

Transformers::setup()->setImageDriver(ImageDriver::GD);

$detector = pipeline('object-detection');

$inputImagePath = 'https://images.pexels.com/photos/1181438/pexels-photo-1181438.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
$outputImagePath = 'output_img.jpg';

$result = $detector($inputImagePath);

$image = imagecreatefromjpeg($inputImagePath);

$color = imagecolorallocate($image, 0, 255, 0);

foreach($result as $object){
    $box = $object['box'];

    $xmin = (int)$box['xmin'];
    $ymin = (int)$box['ymin'];
    $xmax = (int)$box['xmax'];
    $ymax = (int)$box['ymax'];

    imagerectangle($image, $xmin, $ymin, $xmax, $ymax, $color);

    imagefilledrectangle($image, $xmin, $ymin-20, $xmin+100, $ymin, $color);

    $textColor = imagecolorallocate($image, 0, 0, 0);

    imagestring($image, 3, $xmin+5, $ymin-18, $object['label'], $textColor);
}

imagejpeg($image, $outputImagePath);
imagedestroy($image);
