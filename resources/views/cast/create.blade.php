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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Cast</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('cast.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Nama">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                             <input type="number" class="form-control" name="umur" id="umur" placeholder="Enter Umur">
                        </div>
                        <div class="form-group">
                            <label for="bio">Biografi</label>
                            <textarea class="form-control" name="bio" id="bio" placeholder="Input Biografi"></textarea>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
@endsection