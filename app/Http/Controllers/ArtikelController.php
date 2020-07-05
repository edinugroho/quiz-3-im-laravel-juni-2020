<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index()
    {
        $data['artikel'] = ArtikelModel::all();
        return view('contents.show-artikel', $data);
    }
    public function create()
    {
        return view('contents.create-artikel');
    }
    public function store(Request $request)
    {
        $artikel = new ArtikelModel;
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->tag = $request->tag;
        $artikel->slug = Str::slug($request->judul);
        $artikel->save();
        return redirect('artikel');
    }
    public function show($id)
    {
        $data['artikel'] = ArtikelModel::find($id);
        $data['tag'] = explode(",",$data['artikel']->tag);
        return view('contents.detail-artikel', $data);
    }
    public function edit($id)
    {
        $data['artikel'] = ArtikelModel::find($id);
        return view('contents.edit-artikel', $data);
    }
    public function update(Request $request, $id)
    {
        $artikel = ArtikelModel::find($id);
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->tag = $request->tag;
        $artikel->slug = Str::slug($request->judul);
        $artikel->save();
        return redirect('artikel');
    }
    public function destroy($id)
    {
        $artikel = ArtikelModel::find($id)->delete();
        return redirect('artikel');
    }
}
