<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🔮 Nota Ritual Cinta</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=MedievalSharp&family=Cinzel+Decorative:wght@700&display=swap');
    body {
      font-family: 'MedievalSharp', cursive;
      background: radial-gradient(circle at top, #1a001a, #000000 80%);
      background-attachment: fixed;
    }
    .mystic-glow {
      text-shadow: 0 0 12px #ff00ff, 0 0 30px #ff66ff;
    }
    .sigil-border {
      border-image: linear-gradient(90deg, #ff00ff, #ff6600) 1;
    }
  </style>
</head>
<body class="text-pink-100 min-h-screen flex flex-col items-center justify-center">

  <main class="max-w-2xl bg-black/70 border sigil-border border-2 rounded-3xl shadow-[0_0_35px_rgba(255,0,255,0.3)] p-10 text-center">
    <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-500 via-purple-400 to-amber-400 mystic-glow mb-8">
      🧿 Nota Ritual Cinta
    </h1>

    <div class="text-left space-y-4 text-fuchsia-200">
      <p><span class="font-semibold text-fuchsia-400">🕯️ Nama Pemanggil:</span> {{ $transaksi['nama_pembeli'] }}</p>
      <p><span class="font-semibold text-fuchsia-400">📜 Tempat Ritual:</span> {{ $transaksi['alamat'] }}</p>
      <p><span class="font-semibold text-fuchsia-400">💖 Ramuan Cinta:</span> {{ $transaksi['produk'] }}</p>
      <p><span class="font-semibold text-fuchsia-400">⚗️ Jumlah Ramuan:</span> {{ $transaksi['jumlah'] }}</p>
      <p><span class="font-semibold text-fuchsia-400">💰 Persembahan:</span> {{ $transaksi['metode'] }}</p>
      <p class="text-2xl font-bold text-orange-400 mystic-glow mt-4">
        🔮 Total Energi Dibayar: Rp {{ number_format($transaksi['total'], 0, ',', '.') }}
      </p>
    </div>

    <a href="{{ route('produk') }}" 
       class="inline-block mt-10 bg-gradient-to-r from-fuchsia-700 via-pink-600 to-orange-600 text-white font-semibold px-6 py-3 rounded-full shadow-[0_0_25px_rgba(255,0,255,0.4)] hover:scale-110 transition">
       🌀 Kembali ke Ramuan Cinta
    </a>

    <div class="mt-10 text-sm text-fuchsia-400 opacity-80 italic">
      ✧ “Setiap transaksi adalah satu langkah mendekatkan hati yang dituju.” ✧
    </div>
  </main>

</body>
</html>
