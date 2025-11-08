<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Pembayaran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-black via-gray-900 to-gray-800 text-gray-100 min-h-screen flex flex-col items-center justify-center">

  @if($status === 'berhasil')
    <div class="bg-green-700/40 border border-green-500 p-8 rounded-3xl shadow-lg text-center w-full max-w-md">
      <h1 class="text-3xl font-extrabold text-green-400 mb-3">✅ Pembayaran Berhasil!</h1>
      <p class="text-gray-300 mb-6">Terima kasih <span class="font-semibold text-white">{{ $nama }}</span>, pembayaranmu melalui <span class="text-orange-400">{{ strtoupper($metode) }}</span> sebesar <span class="font-bold text-white">Rp {{ number_format($total, 0, ',', '.') }}</span> telah diterima.</p>
      <a href="{{ route('produk') }}" class="bg-gradient-to-r from-blue-600 to-orange-500 hover:scale-105 text-white px-6 py-2 rounded-lg font-semibold transition">Kembali ke Produk</a>
    </div>
  @else
    <div class="bg-red-700/40 border border-red-500 p-8 rounded-3xl shadow-lg text-center w-full max-w-md">
      <h1 class="text-3xl font-extrabold text-red-400 mb-3">❌ Pembayaran Gagal</h1>
      <p class="text-gray-300 mb-6">Maaf, terjadi kesalahan saat memproses pembayaranmu. Silakan coba lagi.</p>
      <a href="{{ route('pembayaran') }}" class="bg-gradient-to-r from-gray-700 to-gray-600 hover:scale-105 text-white px-6 py-2 rounded-lg font-semibold transition">Coba Lagi</a>
    </div>
  @endif

  <footer class="mt-10 text-gray-500 text-sm">© 2025 - Dibuat oleh <span class="text-orange-400 font-bold">Preystar</span></footer>

</body>
</html>
