<?php

// width, height, crop, filter, watermark

return [
    'dir'=>'images',
    'tmpDir'=>'tmp',
    'dirs'=>[
        'default'=>[
            'thumbs'=>[130, 130, true],
            'small'=>[300, 300, true],
            'small1'=>[456, 256, true],
            'big'=>[640, 640, true, null, true],
            'bigGrayscale'=>[640, 640, true, IMG_FILTER_GRAYSCALE],
            'extended'=>[1280, 1024, false, null, true],
            'source'=>[1920, 1200, false],
        ],
        'user'=>[
            'thumbs'=>[130, 130, true],
            'small'=>[300, 300, true],
            'big'=>[640, 640, true, null, true],
            'bigGrayscale'=>[640, 640, true, IMG_FILTER_GRAYSCALE],
            'extended'=>[1280, 1024, false, null, true],
            'source'=>[1920, 1200, false],
        ],
        'misc'=>[
            'thumbs'=>[130, 130, true],
            'small1'=>[639, 241, true, IMG_FILTER_GRAYSCALE],
            'extended'=>[1280, 1024, false, null, true],
            'source'=>[1920, 1200, false],
        ],
    ],
    'settings'=>[
        'quality'=>65,
        'resize'=>'auto',
    ]
];