<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magic Cinta 🔮</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: radial-gradient(circle at center, #1e0033, #0a0014);
      font-family: 'Cinzel Decorative', cursive;
    }
    .glow {
      text-shadow: 0 0 10px #a855f7, 0 0 20px #9333ea, 0 0 40px #c084fc;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Marcellus+SC&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col items-center justify-center text-purple-100 relative overflow-hidden">

  <!-- efek partikel kabut -->
  <div class="absolute inset-0">
    <div class="absolute w-96 h-96 bg-purple-700/20 blur-3xl rounded-full top-10 left-20 animate-pulse"></div>
    <div class="absolute w-96 h-96 bg-fuchsia-600/20 blur-3xl rounded-full bottom-10 right-20 animate-ping"></div>
  </div>

  <!-- kartu utama -->
  <div class="relative z-10 text-center bg-black/40 backdrop-blur-xl border border-purple-800 rounded-3xl p-10 shadow-[0_0_40px_rgba(168,85,247,0.4)] max-w-md">
    <div class="mb-4">
      <img src="https://cdn-icons-png.flaticon.com/512/2909/2909765.png" alt="Magic Icon" class="w-20 h-20 mx-auto animate-spin-slow">
    </div>
    <h1 class="text-5xl glow font-bold mb-3 tracking-wide">
      🔮 Magic Cinta 🔮
    </h1>
    <p class="text-purple-300 text-lg mb-8 font-[Marcellus+SC]">
      “Cinta ditolak, <span class="text-pink-400">dukun</span> bertindak...”  
    </p>
    <a href="{{ route('login') }}" 
       class="bg-gradient-to-r from-purple-700 to-fuchsia-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg hover:scale-110 hover:shadow-[0_0_25px_rgba(236,72,153,0.8)] transition-all duration-300">
       💫 Masuk ke Ritual
    </a>
  </div>

  <!-- footer -->
  <footer class="relative z-10 mt-10 text-purple-500 text-sm font-[Marcellus+SC]">
    © Diciptakan dengan mantra oleh <span class="text-pink-400">xs.milo💪</span>
  </footer>

  <!-- animasi tambahan -->
  <style>
    @keyframes spin-slow {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    .animate-spin-slow {
      animation: spin-slow 12s linear infinite;
    }
  </style>

</body>
</html>
