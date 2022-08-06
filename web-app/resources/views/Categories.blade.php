@extends('Layout.Main')


@section('content')



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
<h2 w3-center>Post Category :</h2>
</div>
  <!-- Blog entry -->
   @foreach($Categories as $Category)
  <div class="w3-card-4 w3-margin w3-white">

    <div class="w3-container" >
      <h3><b ></b></h3>
    </div>

    <div class="w3-container">
      <div class="w3-row">
        <div class="w3-col m8 s12">
         <ul class="w3-ul w3-hoverable w3-white">
         <li class="w3-padding-16">
            <h2><a href="/Categories/{{ $Category->slug }}">{{ $Category->name }}</a></h2>
         </li>
         </ul>
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

<div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Category</h4>
    </div>

    <ul class="w3-ul w3-hoverable w3-white">

      <li class="w3-padding-16">
           <p><a href="/Categories/pesona-indonesia">Pesona Indonesia</a></p>
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
