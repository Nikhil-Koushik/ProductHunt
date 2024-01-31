<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Hunt</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('public/css/app.css') }}" type="text/css"/>
  <script src="https://kit.fontawesome.com/e3c0eb4f90.js" crossorigin="anonymous"></script>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}" type="text/css"/>
</head>
<body>
  <div  class="" id="app">
  <section class="navigation">
      <nav class="navbar navbar-expand-lg p-3 fixed-top">
        <div class="container-fluid">
          <img src="{{asset('public/images/logo.png')}}" class="nav-logo" alt=""><a class="navbar-brand text-danger ml-4" href="#">Product Hunt</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse pl-3" id="navbarSupportedContent">
            <form class="d-flex navbar-nav" role="search">
              <input class="form-control" type="search" placeholder="🔍︎ Search ( ctrl + k )" aria-label="Search">
            </form>
            <ul class="navbar-nav">
              <!-- @foreach($items as $x)
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#" name="{{$x['title']}}Container" id="{{$x['title']}}Container">{{$x['title']}}</a>
                @foreach($x['items'] as $item)
                <div class="navcont {{$x['title']}}Container">
                  <div class="{{$x['title']}}Float">
                    <div class="catholder" id="ca1"><a href="{{ route('work') }}"  class="catitem">{{$item}}</a></div>
                  </div>
                </div>
                @endforeach
              </li> 
              @endforeach -->
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#" name="Community" id="Community">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#" name="categoriesContainer" id="categoriesContainer">Categories</a>
                <div class="navcont categoriesContainer">
                  <div class="CategoriesFloat">
                    <div class="catholder" id="ca1" ><a href="{{ route('work') }}"  class="catitem">Work & Productivity</a></div>
                    <div class="catholder" id="ca2" ><a href="{{ route('engg') }}"  class="catitem">Engineering & Development</a></div>
                    <div class="catholder" id="ca3" ><a href="{{ route('design') }}"  class="catitem">Design & Creative</a></div>
                    <div class="catholder" id="ca4" ><a href="{{ route('social') }}"  class="catitem">Social and Community</a></div>
                    <div class="catholder" id="ca5" ><a href="{{ route('finance') }}"  class="catitem">Finance</a></div>
                    <div class="catholder" id="ca6" ><a href="{{ route('finance') }}"  class="catitem">Marketing and Sales</a></div>
                    <div class="catholder" id="ca7" ><a href="{{ route('finance') }}"  class="catitem">Travel</a></div>
                    <div class="catholder" id="ca8" ><a href="{{ route('finance') }}"  class="catitem">Health & Fitness</a></div>
                    <div class="catholder" id="ca9" ><a href="{{ route('finance') }}"  class="catitem">Platfroms</a></div>
                    <div class="catholder" id="ca10"><a href="{{ route('finance') }}"  class="catitem">Product add-ons</a></div>
                    <div class="catholder" id="ca11"><a href="{{ route('finance') }}"  class="catitem">Web3</a></div>
                    <div class="catholder" id="ca12"><a href="{{ route('finance') }}"  class="catitem">Physical Products</a></div>
                    <div class="catholder" id="ca13"><a href="{{ route('finance') }}"  class="catitem">AI</a></div>
                    <div class="catholder" id="ca14"><a href="{{ route('finance') }}"  class="catitem">Ecommerce</a></div>
                    <div class="catholder" id="ca15"><a href="{{ route('finance') }}"  class="catitem">Family</a></div>
                    <div class="catholder" id="ca16"><a href="{{ route('finance') }}"  class="catitem">Lifestyle</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#" name="Community" id="Community">Community</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#" name="Marketplace" id="Marketplace">Marketplace</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#" name="Advertise" id="Advertise">Advertise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#" name="About" id="About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" aria-current="page" href="#">How to post?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Sign in</a>
              </li>
              <button class="btn btn-danger">Sign up</button>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    @yield('content')
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="{{ asset('public/js/app.js') }}"></script>
  <script src="{{asset('public/script.js')}}" type="text/javascript"></script> 
</body>
</html>
