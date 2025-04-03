<?php
header('Content-Type: application/json');

$films = [
    "films" => [
        [
            "title" => "Inception",
            "details" => [
                "regisseur" => "Christopher Nolan",
                "jaar" => 2010,
                "genre" => "Sci-Fi"
            ]
        ],
        [
            "title" => "The Matrix",
            "details" => [
                "regisseur" => "Lana Wachowski & Lilly Wachowski",
                "jaar" => 1999,
                "genre" => "Action"
            ]
        ]
    ]
];

echo json_encode($films);
