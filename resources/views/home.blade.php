@extends('layouts.home')
@section('title','Dashboard')
@section('content')
    <p>Selamat Datang {{Auth::user()->level}}</p>

@endsection
