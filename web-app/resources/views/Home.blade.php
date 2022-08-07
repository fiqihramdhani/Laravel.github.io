@extends('Layout.Main')



@section('content')
<main>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing ">

    <!-- Three columns of text below the carousel -->
    <div class="row ">
       <div class="col-lg-4">
        <div class="card">
            <img src="image/bg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <div class="row d-flex justify-content-center">
             <button class="btn btn-primary " style="width: 50%">Read More</button>
             </div>
            </div>
         </div>
       </div>

       <div class="col-lg-4">
        <div class="card">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <div class="row d-flex justify-content-center">
             <button class="btn btn-primary " style="width: 50%">Read More</button>
             </div>
            </div>
         </div>
       </div>
       <div class="col-lg-4">
        <div class="card">
            <img src="image/bg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <div class="row d-flex justify-content-center">
             <button class="btn btn-primary " style="width: 50%">Read More</button>
             </div>
            </div>
         </div>
       </div>
    </div>

    <!-- START THE FEATURETTES -->
@if($Posts->count()>0)

    <hr class="featurette-divider">


<div class="row featurette">
      <div class="col-md-5">
        <div class="card bg-secondary">
         <div class="card-body">

        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src="">
         </div>
        </div>
      </div>

        <div class="col-md-7" style="font-family: Times new Rowman">
        <div class="card">
        <div class="card-header text-center">
    <h2 class="featurette"></span></h2>
        </div>
        </div>
      <div class="card">
         <div class="card-body" style="text-align: justify">
        <p class="lead"></p>
         </div>
       </div>
       </div>
    </div>

    <hr class="featurette-divider">

  <div class="row featurette">
      <div class="col-md-7">
      <div class="card">
      <div class="card-header text-center">
    <h2 class="featurette"></h2>
      </div>
      </div>
      <div class="card">
         <div class="card-body" style="text-align: justify" style="font-family: times new rowman">
        <p class="lead"></p>
         </div>
       </div>
       </div>

      <div class="col-md-5">
        <div class="card bg-secondary">
         <div class="card-body">

        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" src="" alt="">
         </div>
        </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->

</main>
@endif
@endsection
