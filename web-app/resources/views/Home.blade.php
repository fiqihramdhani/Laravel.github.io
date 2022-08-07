@extends('Layout.Main')



@section('content')
<main>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
@if(isset($Posts))
  <div class="container marketing ">

    <!-- Three columns of text below the carousel -->
    <div class="row ">
    @foreach($Posts as $Post)

       <div class="col-lg-4">
        <div class="card">
        @if($Post->img)
            <img src="{{ asset('storage/'. $Post->img) }}" class="card-img-top" alt="...">
        @endif
            <div class="card-body ">
             <h5 class="mb-5">{{ $Post -> J_Home }} </h5>
             <p class="card-text">{{ $Post -> e_Home }}</p>
             <div class="row d-flex px-5 ">
             <a href="/HomePost/{{ $Post -> slug }}" class="btn btn-primary justify-content-center "> Read More</a>
             </div>
            </div>
         </div>
       </div>

    @endforeach
<div class="d-flex justify-content-center mt-5" >
<p >{{ $Posts->links() }}</p>
</div>
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">

    <div class="container-fluid text-center mb-5 bg-dark py-3 text-white ">
    <div class="row featurette">
    <h1>Latest Post</h1>
    </div>
    </div>
 @if ($Posts->count())

<div class="row featurette">
      <div class="col-md-5">
        <div class="card bg-secondary">
         <div class="card-body">

        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src="{{ asset('storage/'. $Posts[0]->img) }}"">
         </div>
        </div>
      </div>

        <div class="col-md-7" style="font-family: Times new Rowman">
        <div class="card">
        <div class="card-header text-center">
    <h2 class="featurette"></span>{{ $Posts[0]->J_Home }}</h2>
        </div>
        </div>
      <div class="card">
         <div class="card-body" style="text-align: justify">
        <p class="lead">{!! $Posts[0]->B_Home !!}</p>
         </div>
       </div>
       </div>
    </div>


 @endif

    <hr class="featurette-divider">



    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->

</main>

@endif
@endsection
