<?php

use App\Services\Media\ImageFileService;
use App\Services\Media\PdfFileService;

return [
    "MediaTypeServices" => [
        "image" => [
            "extensions" => [
                "png", "jpg", "jpeg"
            ],
            "handler" => ImageFileService::class
        ],
        "pdf" => [
            "extensions" => [
                "pdf"
            ],
            "handler" => PdfFileService::class
        ]
    ]
];
