<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-gray-100 min-h-screen flex items-center justify-center">

  <div class="bg-gray-800 p-8 rounded-3xl shadow-2xl w-full max-w-md">
    <h1 class="text-2xl font-bold text-center text-orange-400 mb-6">💳 Pembayaran</h1>

    <form action="{{ route('pembayaran.process') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label class="block text-gray-400 mb-1">Nama Pembeli</label>
        <input type="text" name="nama_pembeli" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2" required>
      </div>

      <div class="mb-4">
        <label class="block text-gray-400 mb-1">Total Pembayaran (Rp)</label>
        <input type="number" name="total" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2" required>
      </div>

      <div class="mb-6">
        <label class="block text-gray-400 mb-1">Metode Pembayaran</label>
        <select name="metode" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2">
          <option value="transfer_bank">🏦 Transfer Bank</option>
          <option value="ewallet">📱 E-Wallet (Dana / OVO / Gopay)</option>
          <option value="cod">🚪 COD (Bayar di Tempat)</option>
        </select>
      </div>

      <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-orange-500 hover:scale-105 text-white py-3 rounded-lg font-semibold transition">
        🔥 Bayar Sekarang
      </button>
    </form>

    <a href="{{ route('produk') }}" class="block text-center text-gray-400 mt-6 hover:text-orange-400 transition">
      ⬅ Kembali ke Produk
    </a>
  </div>

</body>
</html>
