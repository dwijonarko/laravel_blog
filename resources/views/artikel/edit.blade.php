@extends('layouts.home')
@section('title','Edit Artikel')
@section('content')
    <div class="row">
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="form-horizontal" action="/artikel/{{$artikel->id}}" method="POST"  enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <div class="col-sm-6">
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Artikel" value="{{$artikel->judul}}">
                    </div>
                    <div class="col-sm-6">
                        <select name="kategori" id="kategori" class="form-control">
                            @foreach ($data_kategori as $kategori)
                                <option {{ ($artikel->kategori_id==$kategori->id ? 'selected' : '') }} value="{{$kategori->id}}"> {{$kategori->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea name="isi" id="isi" cols="100" rows="10">{{$artikel->isi}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                        <label for="gambar" class="control-label col-sm-2">Gambar</label>
                        
                        <div class="col-sm-8">
                            <img src="{{asset('images/'.$artikel->gambar)}}" alt="{{$artikel->judul}}" width="300px">
                            <input type="file" class="form-group" name="gambar">
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-sm-10 ">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
    </div>
@endsection
