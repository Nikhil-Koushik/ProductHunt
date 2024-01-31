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
              @foreach($items as $list)
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="" name="{{$list['title']}}Container" id="{{$list['title']}}Container">{{$list['title']}}</a>
                @if(sizeof($list['items'])>0)
                <div class="navcont NavContainer {{$list['title']}}Container">
                  <div class="{{$list['title']}}Float NavFloat">
                    @foreach($list['items'] as $item)
                    <div class="catholder" id="ca{{$var++}}"><a href="{{ route($heading) }}"  class="catitem">{{$item}}</a></div>
                    @endforeach
                  </div>
                </div>
                @endif
              </li> 
              @endforeach
              
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
