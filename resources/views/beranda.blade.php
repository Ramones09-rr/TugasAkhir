@extends('layout.app')
<title>Beranda</title>
@section('content')

<div id="carouselCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{asset('img/h1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>UAS Semester 5</h1>
          <p>Mata Kuliah Pengembangan Aplikasi Berbasis Web</p>
        </div>
      </div>
    </div>
  </div>

{{-- <style>
    .container {
        position: relative;
        text-align: center;
        color: white;
    }
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 40;
    }
</style>
<div class="container">
    <img src="img/h1.jpg" alt="..." style="d-block w-100;">
    <div class="centered">"Siapapun yang terhibur dengan buku-buku, kebahagiaan tak akan sirna pada dirinya."</div>
</div> --}}

@endsection
