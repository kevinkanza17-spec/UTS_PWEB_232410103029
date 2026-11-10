@extends('layouts.app')

@section('title', 'Profil Pembaca - MangaVault ID')

@section('content')
<div class="max-w-xl mx-auto bg-slate-900 p-6 rounded-xl border border-slate-800 shadow-lg">
    <h2 class="text-lg font-bold text-white border-b border-slate-800 pb-3 mb-4">Informasi Akun Pembaca</h2>
    <div class="space-y-4">
        <div>
            <label class="text-xs text-slate-400 uppercase font-semibold">Username</label>
            <p class="font-medium text-white text-base mt-0.5">{{ $username }}</p>
        </div>
        <div>
            <label class="text-xs text-slate-400 uppercase font-semibold">Level Akun</label>
            <p class="font-medium text-white text-base mt-0.5">{{ $userInfo['level'] }}</p>
        </div>
        <div>
            <label class="text-xs text-slate-400 uppercase font-semibold">Email Terdaftar</label>
            <p class="font-medium text-white text-base mt-0.5">{{ $userInfo['email'] }}</p>
        </div>
        <div>
            <label class="text-xs text-slate-400 uppercase font-semibold">Genre Favorit</label>
            <p class="font-medium text-indigo-400 text-base mt-0.5">{{ $userInfo['favorit_genre'] }}</p>
        </div>
    </div>
</div>
@endsection
