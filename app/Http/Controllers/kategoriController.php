<?php

namespace App\Http\Controllers;
use Illuminate\Models\Kategori;
use Illuminate\View\View;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class kategoriController extends Controller
{
    public function index()
    {
        $kategori = Katefori::all();
        return view('admin.kategori',['nama_kategori' => $kategori]);
    }

    public function create(): View
    {
        return view('admin.kategori');
    }

    public function store(Request $request)
    {
        $kategori->validate($request, [

           'nama_kategori' => 'required',
        ]);

        $kategori = new asd;

        $kategori->nama_kategori = $request->nama_kategori;

        $kategori->save();

        return redirect('admin.kategori');

    }
    // public function store(Request $kategori): RedirectResponse
    // {
    //     $kategori->validate($request, [
    //     'nama_kategori' => 'required|min:20'

    // ]);

    // Kategori::create([
    //     'nama_kategori' => $kategori
    // ]);

    // }
}
