<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🪬 Produk Penakluk Cinta 🔮</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Marcellus+SC&display=swap" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at center, #1a002a, #0a0014 90%);
      font-family: 'Marcellus SC', serif;
      overflow-x: hidden;
    }
    .glow {
      text-shadow: 0 0 10px #a855f7, 0 0 20px #9333ea, 0 0 40px #d946ef;
    }
    @keyframes pulse-glow {
      0%, 100% { opacity: 0.5; transform: scale(1); }
      50% { opacity: 1; transform: scale(1.05); }
    }
    .animate-pulse-glow {
      animation: pulse-glow 3s ease-in-out infinite;
    }
  </style>
</head>
<body class="text-purple-100 min-h-screen relative">

  <!-- Efek kabut mistik -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute w-[600px] h-[600px] bg-purple-900/20 blur-3xl rounded-full top-10 left-20 animate-pulse"></div>
    <div class="absolute w-[500px] h-[500px] bg-fuchsia-600/20 blur-3xl rounded-full bottom-20 right-16 animate-ping"></div>
  </div>

  <!-- Header -->
  <header class="sticky top-0 bg-black/50 backdrop-blur-md border-b border-purple-800 py-4 shadow-[0_0_30px_rgba(192,132,252,0.3)] text-center z-10">
    <h1 class="text-4xl font-extrabold glow text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-fuchsia-400 to-pink-500">
      🪬 Produk Penakluk Cinta 🔮
    </h1>
    <p class="text-purple-300 text-sm mt-1">Mantra, ramuan, dan pesona cinta abadi ✨</p>
  </header>

  <!-- Daftar Produk -->
  <main class="relative z-10 max-w-6xl mx-auto py-12 px-6 grid sm:grid-cols-2 md:grid-cols-3 gap-10">
    @foreach ($produk as $p)
      <div class="bg-gradient-to-br from-[#1a0025]/90 to-[#0a0018]/80 border border-purple-800 rounded-3xl shadow-[0_0_25px_rgba(192,132,252,0.3)] hover:shadow-[0_0_35px_rgba(236,72,153,0.5)] hover:-translate-y-2 transition-all duration-300 overflow-hidden relative group">
        
        <!-- Aura mistik -->
        <div class="absolute inset-0 bg-gradient-to-r from-fuchsia-700/20 via-purple-800/10 to-pink-700/20 opacity-0 group-hover:opacity-100 blur-2xl transition duration-500 animate-pulse-glow"></div>

        <img src="{{ asset($p['foto']) }}" alt="{{ $p['nama'] }}" class="w-full h-60 object-cover rounded-t-3xl border-b border-purple-800">
        
        <div class="p-5 relative z-10">
          <h2 class="text-xl font-semibold text-purple-100 mb-2">{{ $p['nama'] }}</h2>
          <p class="text-purple-300 text-sm mb-3 italic">{{ Str::limit($p['deskripsi'], 70) }}</p>
          <p class="text-pink-400 font-bold text-lg mb-4">{{ $p['harga'] }}</p>
          <a href="{{ route('produk.detail', $p['id']) }}" 
             class="inline-block bg-gradient-to-r from-purple-700 via-fuchsia-600 to-pink-500 text-white px-4 py-2 rounded-full shadow-lg hover:scale-105 hover:shadow-[0_0_25px_rgba(236,72,153,0.8)] transition-all duration-300">
             🔮 Detail Mantra
          </a>
        </div>
      </div>
    @endforeach
  </main>

  <!-- Footer -->
  <footer class="text-center text-purple-400 py-6 relative z-10 font-[Marcellus+SC]">
    ✨ Diciptakan oleh <span class="text-pink-400 font-semibold">xs.milo💪</span> dengan energi cinta abadi 💜
  </footer>

</body>
</html>
