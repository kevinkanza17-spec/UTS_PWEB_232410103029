<nav class="bg-indigo-900 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="font-black text-xl tracking-wider flex items-center gap-2">
            📖 MangaVault<span class="text-indigo-400">.ID</span>
        </div>
        <div class="flex gap-8 font-medium">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}" class="hover:text-indigo-300 transition">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" class="hover:text-indigo-300 transition">Koleksi Manga</a>
            <a href="{{ route('profile', ['username' => request('username')]) }}" class="hover:text-indigo-300 transition">Profil Akun</a>
        </div>
        <div class="text-xs bg-indigo-950 px-3 py-1.5 rounded-full border border-indigo-700">
            Reader: <span class="font-bold text-indigo-300">{{ request('username', 'OtakuReader') }}</span>
        </div>
    </div>
</nav>
