@extends('Layout.Main')

@section('content')


 @if ($Posts->count())
<div class="container-fluid text-center mb-2 bg-dark py-3 text-white ">
    <div class="row featurette">
    <h1>MY PROFILE</h1>
    </div>
</div>

<div class="row featurette">
      <div class="col-md-5">
        <div class="card bg-secondary">
         <div class="card-body">

        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src="image/{{ $Posts[0]->Image }}">
         </div>
        </div>
      </div>

        <div class="col-md-7" style="font-family: Times new Rowman">
        <div class="card">
        <div class="card-header text-center" style="word-spacing: 10px">
    <h2 class="featurette"></span>{{ $Posts[0]->Title }}</h2>
        </div>
        </div>
      <div class="card " style="word-spacing: 7px" style="font-family: times new rowman">
         <div class="card-body" style="text-align: Justify">
        <p class="lead">{!! $Posts[0]->Deskripsi !!}</p>
         </div>
       </div>
       </div>
    </div>

    <div class="container-fluid text-center mt-5 bg-dark py-4 text-white ">
    <div class="row featurette">
    <h6>Kunjungin <a href="/Blog" class="text-decoration-none" >My Website - Blog</a> untuk melihat Artikel lainnya</h6>
    </div>
    </div>




 @endif

@endsection

