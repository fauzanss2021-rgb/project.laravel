<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🔮 Detail Produk Cinta</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Marcellus+SC&display=swap" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at center, #1a002a, #0a0014 90%);
      font-family: 'Marcellus SC', serif;
      overflow-x: hidden;
    }
    .glow {
      text-shadow: 0 0 10px #a855f7, 0 0 25px #9333ea, 0 0 40px #d946ef;
    }
    @keyframes auraPulse {
      0%, 100% { opacity: 0.6; transform: scale(1); }
      50% { opacity: 1; transform: scale(1.05); }
    }
    .animate-aura {
      animation: auraPulse 4s ease-in-out infinite;
    }
  </style>
</head>
<body class="text-purple-100 min-h-screen relative">

  <!-- Efek Kabut & Aura -->
  <div class="absolute inset-0">
    <div class="absolute w-[600px] h-[600px] bg-purple-900/20 blur-3xl rounded-full top-10 left-10 animate-pulse"></div>
    <div class="absolute w-[400px] h-[400px] bg-fuchsia-600/20 blur-3xl rounded-full bottom-10 right-10 animate-ping"></div>
  </div>

  <!-- Header -->
  <header class="bg-black/50 backdrop-blur-md py-6 border-b border-purple-800 text-center shadow-[0_0_30px_rgba(192,132,252,0.3)] relative z-10">
    <h1 class="text-4xl font-extrabold glow text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-fuchsia-400 to-pink-500">
      🔮 Detail Produk Cinta
    </h1>
    <p class="text-purple-300 text-sm mt-1">Mantra & Energi Penakluk Hati 💫</p>
  </header>

  <!-- Konten Utama -->
  <main class="relative z-10 max-w-5xl mx-auto bg-gradient-to-br from-[#1a0025]/90 to-[#0a0018]/80 border border-purple-800 rounded-3xl shadow-[0_0_40px_rgba(192,132,252,0.3)] mt-10 overflow-hidden">
    <div class="md:flex">

      <!-- Gambar Produk dengan Aura -->
      <div class="md:w-1/2 relative">
        <div class="absolute inset-0 bg-gradient-to-tr from-fuchsia-700/20 via-purple-800/10 to-pink-700/20 blur-3xl animate-aura"></div>
        <img src="{{ asset($detail['foto']) }}" alt="{{ $detail['nama'] }}" class="w-full h-96 object-cover border-r border-purple-800 relative z-10">
      </div>

      <!-- Deskripsi -->
      <div class="md:w-1/2 p-8 relative z-10">
        <h2 class="text-3xl font-bold glow mb-3">{{ $detail['nama'] }}</h2>
        <p class="text-purple-300 mb-5 leading-relaxed italic">{{ $detail['deskripsi'] }}</p>
        <p class="text-2xl font-bold text-pink-400 mb-6">{{ $detail['harga'] }}</p>

        <!-- Tombol Aksi -->
        <div class="flex gap-4">
          <a href="{{ route('produk') }}" 
             class="bg-purple-900/60 hover:bg-purple-800 text-purple-200 border border-purple-700 px-5 py-2 rounded-lg font-medium transition hover:scale-105">
            ⬅ Kembali ke Ritual
          </a>

          <a href="{{ route('produk.beli', $id) }}" 
             class="bg-gradient-to-r from-purple-700 via-fuchsia-600 to-pink-500 hover:scale-110 text-white px-6 py-2 rounded-lg font-semibold shadow-lg hover:shadow-[0_0_25px_rgba(236,72,153,0.8)] transition-all duration-300">
            💖 Beli Sekarang
          </a>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="text-center text-purple-400 py-6 mt-10 relative z-10 font-[Marcellus+SC]">
    © {{ date('Y') }} Diciptakan oleh <span class="text-pink-400 font-semibold">xs.milo💪</span> dengan kekuatan cinta abadi 🔥
  </footer>

</body>
</html>
