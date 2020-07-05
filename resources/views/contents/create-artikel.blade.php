@extends('layouts.master')
@section('content-name','Create Artikel')
@section('contents')
<form action="/artikel" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">Judul</label>
        <input class="form-control" name="judul" type="text" placeholder="Judulnya...">
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" name="isi" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" name="tag" placeholder="Pisahkan dengan koma tanpa spasi" rows="3"></textarea>
    </div>
    <a href="/artikel" class="btn btn-warning btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Back</span>
    </a>
    <button class="btn btn-success btn-icon-split">
        <span class="text">Tambah Artikel</span>
        <span class="icon text-white-50">
            <i class="fas fa-arrow-right"></i>
        </span>
    </button>
</form>
@endsection