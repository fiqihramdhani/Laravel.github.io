@extends('Layout.Main')

@section('content')

<div class="w3-content" style="max-width:2000px;margin-top:0px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="image/Bali.webp" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <p><b></b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/Candi.jpeg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

      <p><b></b></p>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/Raja Ampat.jpeg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">

      <p><b></b></p>
    </div>
  </div>

 <!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->

<!-- Header -->
<header class="w3-container w3-center w3-padding-32">
  <h1 style="font-family: sans-serif"><b>PESONA INDONESIA</b></h1>
  <p>"Indonesia is Wonderland"</p>
</header>


<!-- Grid -->


<div class="w3-row">
<!-- Blog entries -->
<div class="w3-col l8 s12">
<div>
<h2 style="margin-left: 20px">Post Category : {{ $Category }}</h2>
</div>
  <!-- Blog entry -->
  @foreach($Posts as $POST)
  <div class="w3-card-4 w3-margin w3-white">
    <img src="https://source.unsplash.com/1200x500?{{$POST->Judul_Posting}}" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>{{ $POST -> Title }}</b></h3>
      <h5>{{ $POST -> Judul_Posting }} -- <span class="w3-opacity">created_at-{{ $POST -> created_at->diffForHumans() }}</span></h5>
    </div>

    <div class="w3-container">
      <p>{{ $POST -> excerpt }}</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p ><a  button class="w3-button w3-red  w3-padding-large w3-white w3-border" href="/Post/{{ $POST -> slug }}"><b>READ MORE »</b></button></a></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
@endforeach

</div>
<!-- END BLOG ENTRIES -->

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top w3-justify">
  <img src="" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b></b></h4>
      <p></p>
    </div>
  </div>

  <hr>

<div class="w3-card w3-margin w3-center" >
    <div class="w3-container w3-padding">
      <h4>Category</h4>
    </div>

    <ul class="w3-ul w3-hoverable w3-white " >

      <li class="w3-padding-16" >
           <p><a href="/Categories/pesona-indonesia" >Pesona Indonesia</a></p>
      </li>
       <li class="w3-padding-16">
           <p><a href="/Categories/web-programming">Web Programming</a></p>
      </li>
       <li class="w3-padding-16">
           <p><a href="/Categories/profile">Profile</a></p>
      </li>

    </ul>

  </div>
  <hr>



<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>



@endsection
