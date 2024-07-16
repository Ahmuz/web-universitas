<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){

        $informasi = Informasi::latest()->limit(3)->get();

        $data = [
            'informasi' => $informasi,
        ];

        return view('index', $data);
    }
}