@extends('layouts.main')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <!-- Navbar Start -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
      <a
        href="index.html"
        class="navbar-brand d-flex align-items-center px-4 px-lg-5"
      >
        <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>AOUTOMOTIF</h2>
      </a>
      <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav  p-4 p-lg-0">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../guru">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../siswa">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../blog">Garage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../user">User</a>
        </li>
        </li>
      </ul>
      </div>
    </nav>
    <!-- Navbar End --> 
    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
         <!-- <h6 class="text-primary text-uppercase">// Our Technicians //</h6> -->
          <h1 class="mb-5">AUTOMOTIF GARAGE</h1>
        </div>
        @forelse ($posts as $post)
        <section class="row">
        <div class="coll">
        <div class="card" style="width: 25rem; ">
  <img src="{{ asset('/storage/posts/'.$post->image) }}" class="card-img-top" alt="...">
  <div class="card-body">
    
  <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{!!$post->content!!}</p>
  </div>
</div>
</div>
</section>
  @empty
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  

        
        @endforelse
        @endsection
</body>
</html>