<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'OtakuReader');

        $stats = [
            'total_manga' => '4 Judul',
            'chapter_dibaca' => '1,743 Chapter',
            'status_member' => 'VIP Reader'
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'OtakuReader');

        $mangaList = [
            [
                'judul' => 'Solo Leveling: Shadow Monarch',
                'genre' => 'Action, Fantasy',
                'chapter' => 'Ch. 185 (Ongoing)',
                'status_baca' => 'Sedang Dibaca',
                'rating' => '4.9/5.0'
            ],
            [
                'judul' => 'One Piece',
                'genre' => 'Adventure, Shonen',
                'chapter' => 'Ch. 1112 (Ongoing)',
                'status_baca' => 'Bookmark',
                'rating' => '5.0/5.0'
            ],
            [
                'judul' => 'Jujutsu Kaisen',
                'genre' => 'Supernatural, Action',
                'chapter' => 'Ch. 271 (Completed)',
                'status_baca' => 'Selesai',
                'rating' => '4.8/5.0'
            ],
            [
                'judul' => 'Black Clover',
                'genre' => 'Action, Shonen',
                'chapter' => 'Ch. 175 (Completed)',
                'status_baca' => 'Sedang Dibaca',
                'rating' => '4.9/5.0'
            ],
        ];

        return view('pengelolaan', compact('username', 'mangaList'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'OtakuReader');

        $userInfo = [
            'level' => 'Level 42 (Master Reader)',
            'email' => strtolower(str_replace(' ', '', $username)) . '@mangavault.id',
            'favorit_genre' => 'Action & Fantasy'
        ];

        return view('profile', compact('username', 'userInfo'));
    }
}
