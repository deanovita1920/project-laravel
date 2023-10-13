@extends('layouts.master')
@section('title', 'Cast')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Cast</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('cast.update', $casts[0]->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text"
                                class="form-control @error('nama')
                                is-invalid
                            @enderror"
                                name="nama" id="nama" placeholder="Enter Nama" value="{{ $casts[0]->nama }}">
                        </div>
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number"
                                class="form-control @error('umur')
                                 is-invalid
                             @enderror"
                                name="umur" id="umur" placeholder="Enter Umur" value="{{ $casts[0]->umur }}">
                        </div>
                        @error('umur')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="bio">Biografi</label>
                            <textarea
                                class="form-control @error('bio')
                                 is-invalid
                             @enderror"
                                name="bio" id="bio" placeholder="Input Biografi">{{ $casts[0]->bio }}</textarea>
                        </div>
                        @error('bio')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card-footer">
                        <button type="update" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection