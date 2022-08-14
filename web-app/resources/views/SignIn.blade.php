
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="/css/carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

	</head>
    @include('Layout.Navbar')

	<body class="img js-fullheight" style="background-image: url(image/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">

				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account ?</h3>
  <form action="?Sign" class="signin-form " method="POST" style="padding-top: 10%">

  @csrf

    @if(session()->has('Success'))


    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('Success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    @if(session()->has('LoginError'))




    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('LoginError')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

      @error('name')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
     </div>
		<div class="form-group ">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" email="email" autofocus value="{{ old('email') }}"  name="email" required>


             @error('email')
            <div class="div invalid-feedback">
                 {{ $message }}
            </div>
             @enderror
        </div>

        <div class="form-group">
	        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
	    </div>

        <div class="form-group">
	        <button type="submit" class="form-control btn btn-primary submit px-3 mt-3">Sign In</button>
	    </div>

	</form>
              <p class="d-block text-center mt-3 " >Not Registered?  <a href="/Registrasi" style="color: rgb(255, 145, 0);">Register Now!</a></p>

              </div>
              </div>
            </div>

	</section>


  <script src="../assets/js/bootstrap.min.js"></script>


	</body>
    @include('Layout.Footer')
</html>
