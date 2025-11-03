<?php

namespace App\Http\Controllers;
// namespace untuk mengelompokkan class agar mudah diorganisir
// di project besar akan ada banyak class dengan nama sama. 
// contoh user. jika tidak ada namespace akan menjadi sulit mana class yang dipakai
// 1. App\Models\User
// 2. App\Http\Controllers\User

use App\Http\Controllers\Controller;
// use untuk mengimpor class controller bawaan laravel supaya bisa dipakai
// HomeController nanti akan mewarisi (extends) Controller. jadi perlu diimport dulu
use Illuminate\Http\Request;
// Import class Request Laravel. Request digunakan kalau kita ingin menerima input dari user, misalnya:
// - Form submission
// - Query string di URL
// - File upload


class HomeController extends Controller
// class baru bernama HomeController 
// mewarisi semua fitur dari class Controller Laravel. contohnya Middleware $this->middleware('auth')
{
    // function untuk menampilkan homepage
    public function index()
    // public -> function ini dapat diakses dari luar class (misal dari route laravel)
    // function index() -> functionnya diberi nama index
    {
        return view('home'); //nanti akan dibuat file home.blade.php
        // return -> mengirim tampilan itu ke broser, jadi user bisa melihat homepage
        // view('home') -> Laravel mencari file Blade template di : resources/views/home.blade.php
    }

    public function demo()
    {
        return view('demo');
    }
}
