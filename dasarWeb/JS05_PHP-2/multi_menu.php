<?php

// Data array menu dari sebelumnya
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

// Fungsi rekursif untuk menampilkan menu bertingkat
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        // Cek apakah item saat ini memiliki subMenu
        if (isset($item['subMenu'])) {
            // Jika ada, panggil kembali fungsi itu sendiri (rekursif)
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

// Panggil fungsi untuk menampilkan menu
tampilkanMenuBertingkat($menu);
?>