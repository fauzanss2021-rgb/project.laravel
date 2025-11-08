<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🔮 Transaksi Penakluk Cinta</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=MedievalSharp&family=Cinzel+Decorative:wght@700&display=swap');
    body {
      font-family: 'MedievalSharp', cursive;
      background-image: radial-gradient(circle at center, #180818 0%, #000 80%);
      background-attachment: fixed;
    }
    .mystic-glow {
      text-shadow: 0 0 10px #ff00ff, 0 0 25px #ff3399, 0 0 40px #ff66ff;
    }
    .sigil-border {
      border-image: linear-gradient(45deg, #ff00ff, #ff6600) 1;
    }
  </style>
</head>
<body class="text-pink-100 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="sticky top-0 bg-black/70 backdrop-blur-md py-5 border-b sigil-border shadow-[0_0_25px_rgba(255,0,255,0.4)] flex justify-between items-center px-10">
    <h1 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-500 via-purple-400 to-amber-400 mystic-glow">
      💞 Ritual Transaksi Cinta
    </h1>
    <a href="{{ route('logout') }}"
       class="bg-gradient-to-r from-pink-700 via-purple-600 to-red-700 text-white font-semibold px-5 py-2 rounded-full shadow-lg hover:scale-110 hover:shadow-fuchsia-500/60 transition-all duration-300">
       🧿 Keluar Ritual
    </a>
  </header>

  <!-- Konten -->
  <main class="max-w-3xl mx-auto mt-10 bg-black/60 border sigil-border rounded-3xl shadow-[0_0_40px_rgba(255,0,255,0.2)] p-8">
    <div class="text-center mb-8">
      <img src="{{ asset($item['foto']) }}" alt="{{ $item['nama'] }}" class="w-52 mx-auto rounded-xl mb-4 shadow-[0_0_25px_rgba(255,100,255,0.5)]">
      <h2 class="text-4xl font-bold text-fuchsia-400 mystic-glow">{{ $item['nama'] }}</h2>
      <p class="text-pink-300 mt-2">💰 Harga Mantra: Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
    </div>

    <form action="{{ route('produk.transaksi', $id) }}" method="POST" class="space-y-6">
      @csrf
      <div>
        <label class="block mb-1 text-fuchsia-300 font-semibold">Nama Pemanggil Cinta</label>
        <input type="text" name="nama_pembeli" required 
          class="w-full rounded-lg bg-black/70 border border-fuchsia-700 px-4 py-2 text-fuchsia-100 focus:ring-2 focus:ring-pink-500">
      </div>

      <div>
        <label class="block mb-1 text-fuchsia-300 font-semibold">Tempat Ritual (Alamat)</label>
        <textarea name="alamat" required 
          class="w-full rounded-lg bg-black/70 border border-fuchsia-700 px-4 py-2 text-fuchsia-100 focus:ring-2 focus:ring-pink-500"></textarea>
      </div>

      <div>
        <label class="block mb-1 text-fuchsia-300 font-semibold">Jumlah Ramuan</label>
        <input type="number" name="jumlah" min="1" value="1" required 
          class="w-full rounded-lg bg-black/70 border border-fuchsia-700 px-4 py-2 text-fuchsia-100 focus:ring-2 focus:ring-fuchsia-500">
      </div>

      <div>
        <label class="block mb-1 text-fuchsia-300 font-semibold">Metode Pembayaran</label>
        <select name="metode" required 
          class="w-full rounded-lg bg-black/70 border border-fuchsia-700 px-4 py-2 text-fuchsia-100 focus:ring-2 focus:ring-orange-500">
          <option value="">-- Pilih Persembahan --</option>
          <option value="Transfer Bank">Transfer Bank</option>
          <option value="COD">COD (Bayar di Tempat)</option>
          <option value="E-Wallet">E-Wallet (Dana / Gopay / OVO)</option>
        </select>
      </div>

      <button type="submit"
        class="w-full bg-gradient-to-r from-fuchsia-700 via-pink-600 to-orange-600 text-white font-semibold py-3 rounded-lg shadow-[0_0_20px_rgba(255,0,255,0.5)] hover:scale-105 transition">
        🪬 Jalankan Ritual Transaksi
      </button>
    </form>

    <a href="{{ route('produk') }}" 
       class="block mt-8 text-center text-fuchsia-400 hover:text-orange-400 transition">⬅ Kembali ke Ramuan Cinta</a>
  </main>

  <!-- Footer -->
  <footer class="text-center text-fuchsia-400 py-6 mt-10 text-sm">
    © {{ date('Y') }} Dibuat dengan mantra oleh <span class="text-orange-400 font-semibold">🧙‍♂️ xs.molo</span>
  </footer>

</body>
</html>
