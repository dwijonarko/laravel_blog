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
    <hr>
    <div class="panel-body">
        <h3>Komentar</h3>
        <form action="" class="form-horizontal" method="POST">
            <div class="form-group">
                <div class="col-sm-6 col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                </div>
            
                <div class="col-sm-6 col-md-6">
                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 col-md-12">
                    <textarea name="omment" id="comment" rows="5" class="form-control" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-md-6">
                <input type="submit" value="Kirim" type="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    <div class="panel-body">
        <div class="row comment">
            <div class="head">
                <small><strong class='user'>Diablo25</strong> 30.10.2017 12:13</small>
            </div>    
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non lorem elementum, accumsan magna sed, faucibus mauris. Nulla pellentesque ante nibh, ac hendrerit ante fermentum sed. Nunc in libero dictum, porta nibh pellentesque, ultrices dolor. Curabitur nunc ipsum, blandit vel aliquam id, aliquam vel velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed sit amet mi dignissim, pretium justo non, lacinia libero. Nulla facilisi. Donec id sem velit. </p>
        </div>
        <div class="row comment">
            <div class="head">
                <small><strong class='user'>Giesche</strong> 30.10.2017 12:13</small>
            </div>    
            <p>Praesent molestie ante nec metus convallis aliquam. Ut aliquam tincidunt mollis. Maecenas et ex sit amet est vehicula ultrices sed sit amet elit. Suspendisse potenti. Aenean et quam ut purus convallis porttitor. Mauris porttitor pretium elementum. Duis blandit elit tincidunt ipsum ultricies, ut faucibus lorem facilisis. Proin ipsum turpis, pharetra in lorem ac, porta ullamcorper velit. Proin gravida odio eget elit ultricies sodales. Vivamus vel tincidunt ligula. Proin pulvinar pellentesque velit eget luctus. Aliquam vitae enim ut purus vestibulum sollicitudin sit amet eget lacus. Nunc tempus fringilla tincidunt. </p>
        </div>
    </div>
</div>
</div>
@endsection