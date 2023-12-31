@extends('layouts.default')


@section('content')
    <section>
        <div class="container mt-5">
            <h1> Tambah Data Mahasiswa </h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf z
                        <div class="form-group">
                            <label for="nama">*Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Wulan Salma">
                        </div>

                        <div class="form-group">
                            <label for="nama">*NIM</label>
                            <input type="number" name="nim" class="form-control" placeholder="21020082">
                        </div>

                        <div class="form-group">
                            <label for="nama">*Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="Lanud Sulaiman"></textarea>
                        </div>
                        
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Data Mahasiswa</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}">
                                << kembali ke halaman utama </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection