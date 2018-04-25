@extends('welcome')
@section('title','Artikel Projects')
@section('content')
    @foreach ($data_artikel as $artikel)
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="{{asset('images/'.$artikel->gambar)}}" alt="{{$artikel->judul}}" class="img-thumbnail img-responsive">
						<p class="text-muted">By <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{$artikel->user->name}} | <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> {{date('d-M-Y',strtotime($artikel->created_at))}}</p>
						<h3>{{$artikel->judul}}</h3>
						<p>{{str_limit($artikel->isi,100)}}</p>
						<a href="/show/{{$artikel->id}}" class="btn btn-default">Read more...</a>
					</div>
				</div>
			</div>   
    @endforeach
@endsection