<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Magic Cinta 🔮</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Marcellus+SC&display=swap" rel="stylesheet">
  <style>
    body {
      background: radial-gradient(circle at center, #1a002a 0%, #0a0014 100%);
      font-family: 'Marcellus SC', serif;
      overflow: hidden;
    }
    .glow-text {
      text-shadow: 0 0 10px #a855f7, 0 0 20px #9333ea, 0 0 40px #d946ef;
    }
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    @keyframes spin-slow {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    .animate-float {
      animation: float 4s ease-in-out infinite;
    }
    .animate-spin-slow {
      animation: spin-slow 12s linear infinite;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen text-purple-100 relative">

  <!-- Efek kabut & aura -->
  <div class="absolute inset-0">
    <div class="absolute w-[500px] h-[500px] bg-purple-800/20 blur-3xl rounded-full top-10 left-20 animate-pulse"></div>
    <div class="absolute w-[400px] h-[400px] bg-fuchsia-600/20 blur-3xl rounded-full bottom-20 right-16 animate-ping"></div>
  </div>

  <!-- Kartu login -->
  <div class="relative bg-black/40 backdrop-blur-lg border border-purple-800 rounded-3xl shadow-[0_0_40px_rgba(192,132,252,0.3)] p-10 w-96 text-center z-10 overflow-hidden">

    <!-- Bola kristal -->
    <div class="mb-6">
      <img src="https://cdn-icons-png.flaticon.com/512/2909/2909765.png" alt="Crystal Ball" class="w-20 h-20 mx-auto animate-spin-slow drop-shadow-[0_0_15px_rgba(192,132,252,0.6)]">
    </div>

    <h2 class="text-4xl glow-text font-bold mb-8 tracking-wide">
      🪄 Login Magic Cinta
    </h2>

    <!-- Notifikasi -->
    @if(session('error'))
      <div class="bg-red-500/20 text-red-300 rounded-lg p-3 mb-4 border border-red-500/40">
        {{ session('error') }}
      </div>
    @endif
    @if(session('success'))
      <div class="bg-green-500/20 text-green-300 rounded-lg p-3 mb-4 border border-green-500/40">
        {{ session('success') }}
      </div>
    @endif

    <!-- Form -->
    <form action="{{ route('login.process') }}" method="POST" class="space-y-5">
      @csrf
      <input type="text" name="username" placeholder="🔮 Username"
             class="w-full rounded-lg bg-[#150024]/70 border border-purple-700 px-4 py-3 text-purple-100 placeholder-purple-400 focus:outline-none focus:ring-2 focus:ring-fuchsia-500">
      <input type="password" name="password" placeholder="✨ Password"
             class="w-full rounded-lg bg-[#150024]/70 border border-purple-700 px-4 py-3 text-purple-100 placeholder-purple-400 focus:outline-none focus:ring-2 focus:ring-fuchsia-500">

      <button type="submit"
              class="w-full bg-gradient-to-r from-purple-700 via-fuchsia-600 to-pink-500 text-white font-semibold py-3 rounded-lg shadow-lg hover:scale-105 hover:shadow-[0_0_25px_rgba(236,72,153,0.8)] transition-all duration-300">
        💫 Masuk ke Ritual
      </button>
    </form>

    <!-- Keterangan -->
    <div class="mt-6 bg-black/50 border border-purple-800 rounded-lg p-4 text-sm text-purple-300 animate-float">
      <p class="text-purple-200 font-semibold mb-1">📜 Gunakan mantra berikut:</p>
      <p><span class="text-fuchsia-400 font-semibold">Username:</span> magiccinta</p>
      <p><span class="text-pink-400 font-semibold">Password:</span> dukunbertindak</p>
    </div>

    <!-- Link kembali -->
    <a href="{{ route('beranda') }}" 
       class="block mt-6 text-sm text-purple-400 hover:text-pink-400 transition">
       🔙 Kembali ke Dunia Cinta
    </a>
  </div>

  <!-- Kabut tambahan -->
  <div class="absolute w-[600px] h-[600px] bg-purple-900/10 blur-3xl rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>

</body>
</html>
