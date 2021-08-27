<?php

use App\Services\Media\ImageFileService;
use App\Services\Media\VideoFileService;

return [
    "MediaTypeServices" => [
        "image" => [
            "extensions" => [
                "png", "jpg", "jpeg"
            ],
            "handler" => ImageFileService::class
        ],
        "video" => [
            "extensions" => [
                "mp4"
            ],
            "handler" => VideoFileService::class
        ]
    ]
];
