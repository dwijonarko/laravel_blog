@extends('layouts.home')
@section('title','User')
@section('content')
    <div class="row" style="margin-bottom:5px;">
        <a href="/user/create" class="btn btn-xs btn-primary"> <i class="glyphicon glyphicon-plus"></i> New </a>
    </div>
    <div class="row">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
            </tr>
            
            @foreach ($data_user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <ul class="list-inline">
                        <li><a href="/user/{{$user->id}}/edit" class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-edit"></i>  Edit</a></li>
                        <li>
                                <form action="/user/{{$user->id}}" method="POST" id="delete-form">
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
