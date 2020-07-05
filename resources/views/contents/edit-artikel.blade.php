@extends('layouts.master')
@section('content-name','Edit Artikel')
@section('contents')
<form action="/artikel/{{ $artikel->id }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="judul">Judul</label>
        <input class="form-control" name="judul" type="text" value="{{ $artikel->judul }}" placeholder="Judulnya...">
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" name="isi" rows="3">{{ $artikel->isi }}</textarea>
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" name="tag" placeholder="Pisahkan dengan koma tanpa spasi" rows="3">{{ $artikel->tag }}</textarea>
    </div>
    <a href="/artikel/{{ $artikel->id }}" class="btn btn-warning btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Back</span>
    </a>
    <button class="btn btn-success btn-icon-split">
        <span class="text">Edit Artikel</span>
        <span class="icon text-white-50">
            <i class="fas fa-pen"></i>
        </span>
    </button>
</form>
@endsection