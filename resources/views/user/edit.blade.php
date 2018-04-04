@extends('layouts.home')
@section('title','User')
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
            <form class="form-horizontal" action="/user/{{$user->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">Name</label>
                    <div class="col-sm-8">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ empty(old('name')) ? $user->name : old('name') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{empty(old('email'))?$user->email : old('email')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-8">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="col-sm-4 control-label">Password Confirmation</label>
                    <div class="col-sm-8">
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password Confirmation">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
    </div>
@endsection
