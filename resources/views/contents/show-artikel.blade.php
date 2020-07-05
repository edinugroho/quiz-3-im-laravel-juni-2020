@extends('layouts.master')
@section('content-name','Artikel')
@section('contents')
    @foreach ($artikel as $a)
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ $a->judul }}</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <p class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-info-circle"></i>
                            </span>
                            <span class="text">Action</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                        <div class="dropdown-header">Action</div>
                        <a class="dropdown-item" href="/artikel/{{ $a->id }}/edit">Edit</a>
                        <a class="dropdown-item" href="/artikel/{{ $a->id }}">Detail</a>
                        <div class="dropdown-divider"></div>
                        <form action="/artikel/{{ $a->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="dropdown-item">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p class="small">Created {{ $a->created_at->diffForHumans() }}</p>
                {{ $a->isi }}
            </div>
        </div>
    @endforeach
    <a href="/artikel/create" class="btn btn-success btn-icon-split">
        <span class="text">Tambah Artikel</span>
        <span class="icon text-white-50">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </span>
    </a> 
@endsection
@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush