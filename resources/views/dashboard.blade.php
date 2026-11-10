@extends('layouts.app')

@section('title', 'Dashboard - MangaVault ID')

@section('content')
<div class="space-y-6">
    <!-- Bagian Sambutan -->
    <div class="bg-indigo-950/60 border-l-4 border-indigo-500 p-5 rounded-r-xl border border-indigo-900/50">
        <h2 class="text-2xl font-bold text-white">Selamat Datang Kembali, {{ $username }}! ⚡</h2>
        <p class="text-slate-400 text-sm mt-1">Akses perpustakaan manga digital tanpa batas langsung dari dashboard Anda.</p>
    </div>

    <!-- Bagian Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-slate-900 p-6 rounded-xl border border-slate-800 shadow-sm">
            <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider">Koleksi Manga</span>
            <div class="text-3xl font-black text-white mt-2">{{ $stats['total_manga'] }}</div>
        </div>
        <div class="bg-slate-900 p-6 rounded-xl border border-slate-800 shadow-sm">
            <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider">Total Dibaca</span>
            <div class="text-3xl font-black text-white mt-2">{{ $stats['chapter_dibaca'] }}</div>
        </div>
        <div class="bg-slate-900 p-6 rounded-xl border border-slate-800 shadow-sm">
            <span class="text-xs font-bold text-indigo-400 uppercase tracking-wider">Status Keanggotaan</span>
            <div class="text-3xl font-black text-amber-400 mt-2">{{ $stats['status_member'] }}</div>
        </div>
    </div>

    
    <div class="bg-slate-900 p-6 rounded-xl border border-slate-800 shadow-sm mt-6">
        <h3 class="text-lg font-bold text-white mb-6 border-b border-slate-800 pb-3">Histori Manga Terbaru</h3>

        
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            
            <!-- KARTU 1: Black Clover -->
            <div class="group relative bg-slate-800 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-slate-700/50">
                <div class="relative aspect-[3/4] w-full overflow-hidden bg-slate-950">
                    <img src="{{ asset('aset/Black clover.jpg') }}" alt="Black Clover" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
                    <div class="absolute top-2 right-2 bg-black/70 backdrop-blur-md text-yellow-400 text-xs font-bold px-2 py-1 rounded-md flex items-center gap-1">
                        <span>★</span><span>4.8</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-3">
                        <a href="#" class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold py-2 rounded-lg transition-colors shadow">Baca</a>
                    </div>
                </div>
                <div class="p-3">
                    <h4 class="text-white font-bold text-sm truncate group-hover:text-indigo-400 transition-colors">Black Clover</h4>
                    <div class="flex items-center justify-between text-xs text-slate-400 mt-2">
                        <span>Ch. 175</span>
                        <span class="bg-indigo-950 text-indigo-300 px-2 py-0.5 rounded border border-indigo-800/50">Ongoing</span>
                    </div>
                </div>
            </div>

            <!-- KARTU 2: Jujutsu Kaisen -->
            <div class="group relative bg-slate-800 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-slate-700/50">
                <div class="relative aspect-[3/4] w-full overflow-hidden bg-slate-950">
                    <img src="{{ asset('aset/jujutsu kaisen.jpg') }}" alt="Jujutsu Kaisen" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
                    <div class="absolute top-2 right-2 bg-black/70 backdrop-blur-md text-yellow-400 text-xs font-bold px-2 py-1 rounded-md flex items-center gap-1">
                        <span>★</span><span>4.9</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-3">
                        <a href="#" class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold py-2 rounded-lg transition-colors shadow">Baca</a>
                    </div>
                </div>
                <div class="p-3">
                    <h4 class="text-white font-bold text-sm truncate group-hover:text-indigo-400 transition-colors">Jujutsu Kaisen</h4>
                    <div class="flex items-center justify-between text-xs text-slate-400 mt-2">
                        <span>Ch. 271</span>
                        <span class="bg-emerald-950 text-emerald-300 px-2 py-0.5 rounded border border-emerald-800/50">Completed</span>
                    </div>
                </div>
            </div>

            <!-- KARTU 3: One Piece -->
            <div class="group relative bg-slate-800 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-slate-700/50">
                <div class="relative aspect-[3/4] w-full overflow-hidden bg-slate-950">
                    <img src="{{ asset('aset/One piece.jpg') }}" alt="One Piece" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
                    <div class="absolute top-2 right-2 bg-black/70 backdrop-blur-md text-yellow-400 text-xs font-bold px-2 py-1 rounded-md flex items-center gap-1">
                        <span>★</span><span>4.9</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-3">
                        <a href="#" class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold py-2 rounded-lg transition-colors shadow">Baca</a>
                    </div>
                </div>
                <div class="p-3">
                    <h4 class="text-white font-bold text-sm truncate group-hover:text-indigo-400 transition-colors">One Piece</h4>
                    <div class="flex items-center justify-between text-xs text-slate-400 mt-2">
                        <span>Ch. 1112</span>
                        <span class="bg-indigo-950 text-indigo-300 px-2 py-0.5 rounded border border-indigo-800/50">Ongoing</span>
                    </div>
                </div>
            </div>

            <!-- KARTU 4: Solo Leveling -->
            <div class="group relative bg-slate-800 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-slate-700/50">
                <div class="relative aspect-[3/4] w-full overflow-hidden bg-slate-950">
                    <img src="{{ asset('aset/solo leveling.jpg') }}" alt="Solo Leveling" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
                    <div class="absolute top-2 right-2 bg-black/70 backdrop-blur-md text-yellow-400 text-xs font-bold px-2 py-1 rounded-md flex items-center gap-1">
                        <span>★</span><span>5.0</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/25 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-3">
                        <a href="#" class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-semibold py-2 rounded-lg transition-colors shadow">Baca</a>
                    </div>
                </div>
                <div class="p-3">
                    <h4 class="text-white font-bold text-sm truncate group-hover:text-indigo-400 transition-colors">Solo Leveling</h4>
                    <div class="flex items-center justify-between text-xs text-slate-400 mt-2">
                        <span>Ch. 185</span>
                        <span class="bg-indigo-950 text-indigo-300 px-2 py-0.5 rounded border border-indigo-800/50">Ongoing</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection