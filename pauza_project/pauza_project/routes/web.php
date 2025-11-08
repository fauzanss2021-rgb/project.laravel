<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// =================== HALAMAN BERANDA ===================
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// =================== HALAMAN LOGIN ===================
Route::get('/login', function () {
    return view('login');
})->name('login');

// =================== PROSES LOGIN ===================
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'magiccinta' && $password === 'dukunbertindak') {
        return redirect()->route('produk')->with('success', 'Login berhasil! Selamat datang, ' . $username);
    } else {
        return back()->with('error', '❌ Username atau Password salah!');
    }
})->name('login.process');

// =================== LOGOUT ===================
Route::get('/logout', function () {
    return redirect()->route('beranda')->with('success', 'Kamu telah logout.');
})->name('logout');

// =================== HALAMAN PRODUK ===================
Route::get('/produk', function () {
    $produk = [
        [
            'id' => 1,
            'nama' => 'keris sukma roso',
            'harga' => 'Rp 750.000',
            'foto' => 'images/keris.jpg',
            'deskripsi' => 'keris semar dapat menjadikan aura berwibawah dan memancarkan cinta kepada lawan jenis .'
        ],
        [
            'id' => 2,
            'nama' => 'semar mesem',
            'harga' => 'Rp 275.000',
            'foto' => 'images/semarmesem.jpg',
            'deskripsi' => 'cara cepat menalukan cinta dalam satu malam.'
        ],
        [
            'id' => 3,
            'nama' => 'sepasang wayang',
            'harga' => 'Rp 1.280.000',
            'foto' => 'images/sepasangwayang.jpg',
            'deskripsi' => 'sebagai perekat hubungan dan menjaga pasangan dari gangguan luar.'
        ],
        [
            'id' => 4,
            'nama' => 'buku amalan cinta',
            'harga' => 'Rp 85.000',
            'foto' => 'images/amalan.jpg',
            'deskripsi' => 'buku yang isinya mengandung amalan atau doa seputar kisah cinta dengan tulisan aksara jawa.'
        ],
        [
            'id' => 5,
            'nama' => 'rogo wewangian',
            'harga' => 'Rp 74.000',
            'foto' => 'images/wewangian.jpg',
            'deskripsi' => 'rogo wangian atau parfum untuk memancarka jiwa agar lebih percaya diri dan memancarkan kenyamanan.'
        ],
    ];

    return view('produk', compact('produk'));
})->name('produk');

// =================== DETAIL PRODUK ===================
Route::get('/produk/{id}', function ($id) {
    $produk = [
        1 => ['nama' => 'keris sukma roso', 'harga' => 'Rp 750.000', 'foto' => 'images/keris.jpg', 'deskripsi' => 'keris semar dapat menjadikan aura berwibawah dan memancarkan cinta kepada lawan jenis.'],
        2 => ['nama' => 'semar mesem', 'harga' => 'Rp  275.000', 'foto' => 'images/semarmesem.jpg', 'deskripsi' => 'cara cepat menalukan cinta dalam satu malam.'],
        3 => ['nama' => 'sepasang wayang', 'harga' => 'Rp 1.280.000', 'foto' => 'images/sepasangwayang.jpg', 'deskripsi' => 'sebagai perekat hubungan dan menjaga pasangan dari gangguan luar.'],
        4 => ['nama' => 'buku amalan cinta', 'harga' => 'Rp 85.000', 'foto' => 'images/amalan.jpg', 'deskripsi' => 'buku yang isinya mengandung amalan atau doa seputar kisah cinta dengan tulisan aksara jawa.'],
        5 => ['nama' => 'rogo wewangian', 'harga' => 'Rp 74.000', 'foto' => 'images/wewangian.jpg', 'deskripsi' => 'rogo wangian atau parfum untuk memancarka jiwa agar lebih percaya diri dan memancarkan kenyamanan.'],
    ];

    if (!array_key_exists($id, $produk)) {
        abort(404, 'Produk tidak ditemukan');
    }

    $detail = $produk[$id];
    return view('detail', compact('detail', 'id'));
})->name('produk.detail');

// =================== HALAMAN TRANSAKSI ===================
Route::get('/produk/{id}/beli', function ($id) {
    $produk = [
        1 => ['nama' => 'keris sukma roso', 'harga' => 750000, 'foto' => 'images/keris.jpg'],
        2 => ['nama' => 'semar mesem', 'harga' => 275000, 'foto' => 'images/semarmesem.jpg'],
        3 => ['nama' => 'sepasang wayang', 'harga' => 1280000, 'foto' => 'images/sepasangwayang.jpg'],
        4 => ['nama' => 'buku amalan cinta', 'harga' => 85000, 'foto' => 'images/amalan.jpg'],
        5 => ['nama' => 'rogo wewangian', 'harga' => 74000, 'foto' => 'images/wewangian.jpg'],
    ];

    if (!array_key_exists($id, $produk)) {
        abort(404, 'Produk tidak ditemukan');
    }

    $item = $produk[$id];
    return view('transaksi', compact('item', 'id'));
})->name('produk.beli');

// =================== PROSES TRANSAKSI ===================
Route::post('/produk/{id}/transaksi', function (Request $request, $id) {
    $produk = [
        1 => ['nama' => 'keris sukma roso', 'harga' => 750000],
        2 => ['nama' => 'semar mesem', 'harga' => 275000],
        3 => ['nama' => 'sepasang wayang', 'harga' => 1280000],
        4 => ['nama' => 'buku amalan cinta', 'harga' => 85000],
        5 => ['nama' => 'rogo wewangian', 'harga' => 74000,],
    ];

    if (!array_key_exists($id, $produk)) {
        abort(404, 'Produk tidak ditemukan');
    }

    // Ambil data form transaksi
    $jumlah = (int) $request->input('jumlah', 1);
    $total = $produk[$id]['harga'] * $jumlah;

    $transaksi = [
        'nama_pembeli' => $request->input('nama_pembeli'),
        'alamat' => $request->input('alamat'),
        'metode' => $request->input('metode'),
        'produk' => $produk[$id]['nama'],
        'jumlah' => $jumlah,
        'total' => $total,
    ];

    return view('nota', compact('transaksi'));
})->name('produk.transaksi');

// =================== HALAMAN PEMBAYARAN ===================
Route::get('/pembayaran', function (Request $request) {
    return view('payment');
})->name('pembayaran');

// =================== PROSES PEMBAYARAN ===================
Route::post('/pembayaran/process', function (Request $request) {
    $nama = $request->input('nama_pembeli');
    $metode = $request->input('metode');
    $total = $request->input('total');

    // simulasi status pembayaran
    $status = 'berhasil'; // bisa diubah ke 'gagal' untuk simulasi

    return view('payment-status', compact('nama', 'metode', 'total', 'status'));
})->name('pembayaran.process');
