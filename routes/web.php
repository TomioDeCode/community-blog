<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route WEB

Route::get('/hello', function () {
    return "Hello World!";
});

Route::get("/belajar", function () {
    echo "<h1>Hello World!</h1>";
    echo "<p>Saya Sedang Belajar Laravel</p>";
});

Route::get("/mahasiswa/fasilkom/anto", function () {
    echo '<h2 style="text-align: center"><u>Welcome Anton</u></h2>';
});

// SMKN Routes

Route::get("/siswa", function () {
    $arrSiswa = [
        "Niam",
        "Adi",
        "Abi",
        "Verdi"
    ];
    return view("smkn.siswa")->with('siswa', $arrSiswa);
});

Route::get('/guru', function () {
    $arrGuru = [
        "Bu Dian",
        "Pak Ananda",
        "Pak Rofik",
        "Pak Slamet"
    ];
    return view("smkn.guru")->with("guru", $arrGuru);
});

Route::get("/gallery", function () {
    return view("smkn.gallery");
});

Route::get("/admin", function () {
    return view("smkn.admin");
})->name('gambar');

// Route Parameter

Route::get('/mahasiswa', function () {
    $nama = "Muhammad Syamsu Niam";
    $nilai = [80, 64, 30, 76, 95];
    return view('universitas.mahasiswa', compact('nama', 'nilai'));
});

Route::get("/mahasiswa/{nama}", function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($a, $b) {
    echo "Cek sisa stok untuk $a $b";
});

Route::get('/informasi/{fakultas}/{jurusan}', function ($fakultas, $jurusan) {
    $data = [$fakultas, $jurusan];
    return view('smkn.informasi')->with('data', $data);
})->name('info');

// Route Opsional Parameter

Route::get(
    '/stok_barang/{jenis?}/{merek?}',
    function ($a = 'smartphone', $b = 'samsung') {
        return "Cek sisa stok untuk $a $b";
    }
);

// Route Regular Expression

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

// Route Redirect

Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});
Route::redirect('/contact-us', '/hubungi-kami');

// Route Group

Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        echo "<h1>Daftar Mahasiswa</h1>";
    });

    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen</h1>";
    });

    Route::get('/karyawan', function () {
        echo "<h1>Daftar Karyawan</h1>";
    });
});

// Route Fallback

Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan!";
});
