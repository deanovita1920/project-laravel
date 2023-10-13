@extends('layouts.master')
@section('title', 'Cast')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Genre</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Show Genre</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Genre</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Nama" value="{{ $casts[0]->nama }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" name="umur" id="umur" placeholder="Enter Umur" value="{{ $casts[0]->umur }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="bio">Biografi</label>
                        <textarea class="form-control" name="bio" id="bio" placeholder="Input Biografi" disabled>{{ $casts[0]->bio }}</textarea>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="back" action="#" class="btn btn-primary">Back</button>
                </div>
            </div>
        </div>
    </div>

@endsection