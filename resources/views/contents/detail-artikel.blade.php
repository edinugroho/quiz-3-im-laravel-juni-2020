@extends('layouts.master')
@section('content-name','Detail Artikel')
@section('contents')
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ $artikel->judul }}</h6>
                <div>
                @for ($i = 0; $i < count($tag); $i++) 
                    <button class="btn btn-primary btn-sm">{{ $tag[$i] }}</button>
                @endfor
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p class="small">Created {{ $artikel->created_at->diffForHumans() }}</p>
                <br>
                {{ $artikel->isi }}
            </div>
        </div> 
        <div class="row ml-1">
            <a href="/artikel/{{ $artikel->id }}/edit" class="btn btn-success btn-icon-split">
                <span class="text">Edit</span>
                <span class="icon text-white-50">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </span>
            </a>&nbsp;
            <form action="/artikel/{{ $artikel->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-icon-split">
                    <span class="text">Delete</span>
                    <span class="icon text-white-50">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </span>
                </button>
            </form>
        </div>
@endsection