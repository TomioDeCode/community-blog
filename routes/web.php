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

// Route Parameter

Route::get('/mahasiswa', function () {
    $arrMahasiswa = [
        "Risa Lestari",
        "Rudi Hermawan",
        "Bambang Kusumo",
        "Lisa Permata"
    ];
    return view('universitas.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
});

Route::get("/siswa/{nama}/{umur}/{kota}", function ($nama, $umur, $kota) {
    return view("smkn.siswa")
        ->with('nama', $nama)
        ->with('umur', $umur)
        ->with('kota', $kota);
});

Route::get("/mahasiswa/{nama}", function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($a, $b) {
    echo "Cek sisa stok untuk $a $b";
});

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
