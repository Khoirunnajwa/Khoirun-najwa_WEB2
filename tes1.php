<?php
// Membuat associative array dengan data entitas
$data_entitas = [
    "Entitas 1" => [
        "Nama" => "Tari Barong",
        "NRP" => "109",
        "Kategori" => "Budaya daerah di indonesia",
        "Deskripsi" => "Tari Barong adalah salah satu tari tradisional Bali yang paling terkenal.
         Tari ini menggambarkan pertarungan antara kebaikan dan kejahatan, di mana Barong, yang mewakili kebaikan, melawan Rangda, yang mewakili kejahatan.",
        "Gambar" => "ragambudayaindonesia.jpg",
    ],
    "Entitas 2" => [
        "Nama" => "Albert Einstein",
        "NRP" => "109",
        "Kategori" => "Penemu-penemu terkenal dunia",
        "Deskripsi" => "Albert Einstein adalah seorang fisikawan teoretis Jerman-Amerika yang dianggap sebagai salah satu ilmuwan paling berpengaruh dalam sejarah.
         Dia adalah salah satu pendiri fisika modern dan teori relativitas umum-nya telah menjadi salah satu teori fisika paling sukses dalam sejarah.",
        "Gambar" => "Alber Einstein.jpg",
    ],
    "Entitas 3" => [
        "Nama" => "Orangutan Kalimantan",
        "NRP" => "109",
        "Kategori" => "Flora dan Fauna terancam punah",
        "Deskripsi" => "Orangutan Kalimantan adalah salah satu spesies primata terancam punah di dunia.
         Spesies ini terancam oleh hilangnya habitat, perburuan, dan perdagangan ilegal.",
        "Gambar" => "oranghutan.jpg",
    ],
    "Entitas 4" => [
        "Nama" => "Soekarno ",
        "NRP" => "109",
        "Kategori" => "Pahlawan Nasional indonesia",
        "Deskripsi" => "Soekarno adalah presiden pertama Indonesia.
         Dia adalah pemimpin perjuangan kemerdekaan Indonesia dari kolonialisme Belanda dan menjadi presiden pertama negara tersebut setelah kemerdekaan pada tahun 1945.",
        "Gambar" => "Soekarno.jpg",
    ],
    "109%5=5,45" => [
        "Nama" => "Khoirun najwa",
        "NRP" => "109",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Apple Inc. adalah perusahaan multinasional Amerika yang berkantor pusat di Cupertino, California, yang merancang, mengembangkan, dan menjual elektronik konsumen,
         perangkat lunak komputer, dan layanan internet. Perusahaan ini didirikan pada tahun 1976 oleh Steve Jobs, Steve Wozniak, dan Ronald Wayne.",
        "Gambar" => "Perusahaan teknologi.jpg",
    ],
    
];

// Menampilkan data dalam tabel HTML
echo "<style>
    table {
        width: 100%;
    }
    th, td {
        padding: 5px;
    }
    img {
        max-width: 100px; 
        max-height: 100px; 
    }
</style>";

echo "<h2>Data Entitas:</h2>";
echo "<table border='1'>";
echo "<tr><th>Nama</th><th>NRP</th><th>Kategori</th><th>Deskripsi</th><th>Gambar</th></tr>";

foreach ($data_entitas as $entitas) {
    echo "<tr>";
    echo "<td>{$entitas['Nama']}</td>";
    echo "<td>{$entitas['NRP']}</td>";
    echo "<td>{$entitas['Kategori']}</td>";
    echo "<td>{$entitas['Deskripsi']}</td>";
    echo "<td><img src='{$entitas['Gambar']}' alt='Gambar Entitas'></td>";
    echo "</tr>";
}

echo "</table>";
?>
