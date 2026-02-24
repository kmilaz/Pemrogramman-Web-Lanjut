<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '244107020111 - Kamila Zahwa';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
