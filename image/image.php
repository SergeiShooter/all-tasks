<?php

// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;



// to finally create image instances
$img = Image::make('bmw.jpg');
$img->resize(200, null, function ($constraint) {
    $constraint->aspectRatio();
});

$img->text('BMW', $img->getWidth() - 20, $img->getHeight() - 10, function($font) {
    $font->size(1000);
    $font->color([255, 255, 255, 0.5]);
    $font->align('center');
    $font->valign('top');
    $font->angle(45);
});

$img->save('test.jpg');

echo $img->response('jpg');