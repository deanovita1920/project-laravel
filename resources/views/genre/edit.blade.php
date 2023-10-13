@extends('layouts.master')
@section('title', 'genre')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Genre</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Genre</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Genre</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('genre.update', $genre->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text"
                                class="form-control @error('nama')
                                is-invalid
                            @enderror"
                                name="nama" id="nama" placeholder="Enter Nama" value="{{ $genre->nama }}">
                        </div>
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card-footer">
                        <button type="update" class="btn btn-warning">Update</button>
                        <input type="button" class="btn btn-danger" value="kembali"onclick="history.back()">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection