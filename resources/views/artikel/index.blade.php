@extends('layouts.home')
@section('title','Artikel')
@section('content')
    <div class="row" style="margin-bottom:5px;">
        <a href="/artikel/create" class="btn btn-xs btn-primary"> <i class="glyphicon glyphicon-plus"></i> New </a>
    </div>
    <div class="row">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th></th>
            </tr>
            
            @foreach ($data_artikel as $artikel)
            <tr>
                <td>{{$artikel->id}}</td>
                <td>{{$artikel->judul}}</td>
                <td>{{$artikel->kategori->nama}}</td>
                <td>{{$artikel->user->name}}</td>
                <td>
                    <ul class="list-inline">
                        <li><a href="/artikel/{{$artikel->id}}/edit" class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-edit"></i>  Edit</a></li>
                        <li>
                                <form action="/artikel/{{$artikel->id}}" method="POST" id="delete-form">
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
