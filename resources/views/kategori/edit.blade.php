@extends('layouts.home')
@section('title','Kategori')
@section('content')
    <div class="row">
            <form class="form-horizontal" action="/kategori/{{$kategori->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{$kategori->nama}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-10">
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan" value="{{$kategori->keterangan}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
    </div>
@endsection
