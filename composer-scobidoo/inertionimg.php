<?php

require_once 'vendor/autoload.php';


// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// instantiate image with auto-orientation
$img = Image::make('f1.jpg');

$img->rotate(-270);

// now you are able to resize the instance
$img->resize(320, 240);

// just add a little green tone to the image
$img->colorize(0, 30, 25);

// finally we save the image as a new file
$img->save('f2.png');

header('Content-type: image/png');
readfile('f2.png');
