@extends('layouts.home')
@section('title','Kategori')
@section('content')
    <div class="row" style="margin-bottom:5px;">
        <a href="/kategori/create" class="btn btn-xs btn-primary"> <i class="glyphicon glyphicon-plus"></i> New </a>
    </div>
    <div class="row">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th></th>
            </tr>
            
            @foreach ($data_kategori as $kategori)
            <tr>
                <td>{{$kategori->id}}</td>
                <td>{{$kategori->nama}}</td>
                <td>{{$kategori->keterangan}}</td>
                <td>
                    <ul class="list-inline">
                        <li><a href="/kategori/{{$kategori->id}}/edit" class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-edit"></i>  Edit</a></li>
                        <li>
                                <form action="/kategori/{{$kategori->id}}" method="POST" id="delete-form">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-xs btn-danger"> <i class="glyphicon glyphicon-trash"></i> Delete</button>
                                </form>
                        </li>
                    </ul>      
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
