@extends('Layout.Main')

@section('content')
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
@if($Posts->count())
.bgimg-1 {
  background-image: url('image/{{ $Posts[1]->Image }}');
  min-height: 600px;
  margin-top:50px;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("image/{{ $Posts[0]->Image }}");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("image/pexels3.webp");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}


/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 600px;
  }
}
</style>




<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">

  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">{{ $Posts[0]->Title }}</h3>
  <p class="w3-center"><em>I love Programming</em></p>
  <p class="w3-justify">{{ $Posts[0]->Deskripsi }}</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>{{ $Posts[0]->Nama }}</b></p><br>
      <img src="image/{{ $Posts[0]->Image }}" class="w3-round w3-image " alt="Photo of Me" width="500" height="333">
    </div>


    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large w3-justify">
      <p>{{ $Posts[1]->Deskripsi }}</p>
    </div>
    @endif
  </div>
  <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
  <p class="w3-wide"><i class="fa fa-laptop"></i>MS-OFFICE</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:80%">80%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>PROGRAMMING</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-tv"></i>SERVICE TV</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>PHP</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Java</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>HTML dan BOOSTRAP</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
</div>





<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container ">
  <div class="w3-display-middle">

  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">{{ $Posts[3]->Title}}</h3>


  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-justify">
  @foreach($Posts->skip(2) as $POST)

    <div class="w3-col m6">
    <div class="w3-card w3-margin w3-center ">
    <img class="img-circle" src="image/{{ $POST->Image }}" alt="Bali"  >
    <div class="w3-container w3-white">
        <h2 >{{ $POST->Nama }}</h2>
          <p>
          {{ $POST->Deskripsi }}
         </p>
          <p><a  class="w3-button w3-round w3-red"  href="/News" role="button">View details &raquo;</a></p>
    </div>


    </div>
  </div>
  @endforeach
</div>

</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container">

</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64 w3-center" id="contact">
  <h3 class="w3-center">Contact</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">

    @if($Posts->count())

    <div class="w3-col m12 w3-panel ">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> {{ $Posts[3]->Alamat }}<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +62 8571371536<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: {{ $Posts[0]->Email }}<br>
      </div>
      @endif
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
@endsection

