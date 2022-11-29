@extends('template.main')
@section('content')
<div class="container-xxl bg-light py-5 my-5">
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">PAKET LIBURAN</h1>
        </div>
        @foreach($destinasi as $d)
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white p-5">
                    <img class="img-fluid mb-4"
                        src="{{asset('asset/technext.github.io/CryptoCoin/img/songgolangit.jpg')}}" alt="">
                    <h5 class=" mb-3">
                        <a href="{{url('destinas/' .$d->slug )}}">{{ $d->nama }}</a>
                    </h5>
                    <p>{{$d->deskripsi}}</p>
                    <a href="#">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection