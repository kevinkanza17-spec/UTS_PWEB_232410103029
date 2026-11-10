@extends('layouts.app')

@section('title', 'Koleksi Manga - MangaVault ID')

@section('content')
<div class="space-y-5">
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-xl font-bold text-white">Daftar Manajemen & Bacaan Manga</h2>
            <p class="text-xs text-slate-400">Data array dinamis yang dirender menggunakan controller.</p>
        </div>
        <span class="text-xs bg-indigo-950 text-indigo-300 border border-indigo-800 px-3 py-1 rounded-full font-medium">User: {{ $username }}</span>
    </div>

    <div class="bg-slate-900 rounded-xl border border-slate-800 overflow-hidden shadow-md">
        <table class="w-full text-left text-sm text-slate-300">
            <thead class="bg-slate-800 text-slate-200 uppercase text-xs tracking-wider border-b border-slate-700">
                <tr>
                    <th class="p-4">Judul Manga</th>
                    <th class="p-4">Genre</th>
                    <th class="p-4">Chapter Terakhir</th>
                    <th class="p-4">Status Baca</th>
                    <th class="p-4">Rating</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800">
                @foreach($mangaList as $manga)
                <tr class="hover:bg-slate-850 transition">
                    <td class="p-4 font-semibold text-white">{{ $manga['judul'] }}</td>
                    <td class="p-4 text-slate-400">{{ $manga['genre'] }}</td>
                    <td class="p-4 text-indigo-300 font-medium">{{ $manga['chapter'] }}</td>
                    <td class="p-4">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-indigo-950 text-indigo-300 border border-indigo-800">
                            {{ $manga['status_baca'] }}
                        </span>
                    </td>
                    <td class="p-4 text-amber-400 font-bold">⭐ {{ $manga['rating'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
