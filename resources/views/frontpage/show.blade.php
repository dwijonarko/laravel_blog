@extends('welcome')
@section('title',$artikel->judul)

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="panel panel-default">
    <div class="panel-body">
        <p class="text-muted">By <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{$artikel->user->name}} | <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> {{date('d-M-Y',strtotime($artikel->created_at))}}</p>
        <h3>{{$artikel->judul}}</h3>
        <img src="{{asset('images/'.$artikel->gambar)}}" alt="{{$artikel->judul}}" class="img-thumbnail img-responsive">        
        <p>{!! nl2br(e($artikel->isi)) !!}</p>
    </div>
</div>
</div>   
@endsection