@extends('layouts.master')

@section('content')
<section id="heading">
  <div class="row">
    <div class="col col-md-1"></div>
    <div class="col col-md-10">
      <p style="font-size: 12px; color: gray;">Categories → {{$heading}}</p>
      <div class="row">
        <div class="col col-md-6">
          <h1 class="headingone">The best {{$heading}} in 2024</h1>
          <div class="" style="color: gray;">
            Tried, tested and reviewed by the community.
            <div class="row">
              <div class="" style="margin-top:20px;">
                <div class="">
                  <button class="" style="background-color: #E9F6FF; border: none; border-radius:5px;margin:5px;">
                    <i class="fa-brands fa-facebook" style="color: #0091ff;margin: 5px;"></i><span style="color: blue;">Share</span>
                  </button>
                  <button class="" style="background-color: #E9F6FF; border: none; border-radius:5px;margin:5px;">
                    <i class="fa-brands fa-twitter" style="color: #0091ff;margin: 5px;"></i><span style="color: blue;">Tweet</span>
                  </button>
                </div>
              </div>
              <div class="col-md-8"></div>
            </div>
          </div>
        </div>
        <div class="col col-md-1"></div>
        <div class="col col-md-5">
          <div class="row logorow">
            <div class="col-md-2 logoimg1">
              <img src="{{ asset('https://ph-files.imgix.net/6bc200fe-4882-4e91-931d-661aba5b21cd.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1') }}">
            </div>
            <div class="col-md-2 logoimg1">
              <img src="{{ asset('https://ph-files.imgix.net/c00fabc4-483c-4087-9621-a5de409efb26.jpeg?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1') }}" alt="">
            </div>
            <div class="col-md-2 logoimg1">
              <img src="{{ asset('https://ph-files.imgix.net/4ea949e7-7b4a-4dc8-86ae-397c3be0db85.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1') }}" alt="">
            </div>
            <div class="col-md-2 logoimg1">
              <img src="{{ asset('https://ph-files.imgix.net/27fd4d4e-321c-4e7a-9415-ae1f6a0ddc30.jpeg?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1') }}" alt="">
            </div>
          </div>
          <div class="row logorow">
            <div class="col-md-2 logoimg2">
              <img src="{{ asset('https://ph-files.imgix.net/27fd4d4e-321c-4e7a-9415-ae1f6a0ddc30.jpeg?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1') }}" alt="">
            </div>
            <div class="col-md-2 logoimg2">
              <img src="{{ asset('https://ph-files.imgix.net/4ea949e7-7b4a-4dc8-86ae-397c3be0db85.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1') }}" alt="">
            </div>
            <div class="col-md-2 logoimg2">
              <img src="{{ asset('https://ph-files.imgix.net/a7c3630b-4967-42e8-ae59-fdf7d0117360.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1') }}" alt="">
            </div>
            <div class="col-md-2 logoimg2">
              <img src="{{ asset('https://ph-files.imgix.net/6bc200fe-4882-4e91-931d-661aba5b21cd.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=80&h=80&fit=crop&dpr=1') }}">
            </div>
          </div>
          
        </div>
      </div>
      
      
    </div>
  </div>
</section>

<section id="apps">
  <div class="row"> 
    <div class="col col-md-1"></div>
    <div class="col col-md-6 appcorner">
      <p class="promotedname">Promoted</p>
      <div class="promoted">
        <div class="row">
          <div class="col col-md-1">
            <img src="https://ph-files.imgix.net/e39ffa38-f434-4f43-9a0a-e2e6d8d5a969.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=60&h=60&fit=max&bg=0fff&dpr=1" alt="">
          </div>
          <div class="col col-md-10 promocontent">
              <div class="row">
                <div class="col" style="color:rgb(57, 56, 56); font-weight:500">Guidde Ad</div>
              </div>
              <div class="row">
                <div class="col">Magically create free video documentation with AI</div>
              </div>
            </div>
        </div>
      </div>
      <select name="" id="" class="select">
        <option value="Best">Best</option>
        <option value="Most followed">Most followed</option>
        <option value="Recent">Recent</option>
      </select>
      @foreach($apps as $item)
      <div class="appdata">
          <div class="row app-title">
            <div class="col col-md-1" style="padding-left: 0px;">
              <img class="appimg" src="{{$item->logo}}" alt="">
            </div>
            <div class="col col-md-10 appname">
              <div class="row">
                <div class="col">
                  <a href="" style="text-decoration: none;"><h5>{{$item->name}}</h5></a>
                </div>
              </div>
              <div class="row" style="display: inline-block">
                <div style="display:inline">⭐⭐⭐⭐⭐</div>
                <div style="display:inline;color:gray">{{$item->review_count}} reviews</div>
              </div>
            </div>
          </div>
          <div class="row app-desc">
            {{$item->description}}
          </div>
        </div>
        @endforeach
      </div>
      <div class="col col-md-1"></div>
      <div class="col col-md-3 rightcontent">
        <div class="reacts">
          <div class="row" style="color: gray; font-weight:bold;">NEWEST {{strtoupper($heading)}}</div>
          <div class="row rightitems">
            <div class="col col-md-3"><img src="https://ph-files.imgix.net/4e10b692-500a-4133-abe7-049f92bd1239.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=60&h=60&fit=crop&dpr=1" alt=""></div>
            <div class="col col-md-9">
              <div class="row righttitle">React Emojis</div>
              <div class="row">Elevate UI with Animated Joy!</div>
              <div class="row">★★★★★</div>
            </div>
          </div>
          <div class="row rightitems">
            <div class="col col-md-3"><img src="https://ph-files.imgix.net/5e43caff-0e27-484f-aa60-5298449acf5a.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=60&h=60&fit=crop&dpr=1" alt=""></div>
            <div class="col col-md-9">
              <div class="row righttitle">Tapper - ADB Toolkit Desktop App</div>
              <div class="row">ADB Manager - Android Debug Bridge Manager for ADB Commands</div>
              <div class="row">★★★★★</div>
            </div>
          </div>
          <div class="row rightitems">
            <div class="col col-md-3"><img src="https://ph-files.imgix.net/4e10b692-500a-4133-abe7-049f92bd1239.png?auto=compress&codec=mozjpeg&cs=strip&auto=format&w=60&h=60&fit=crop&dpr=1" alt=""></div>
            <div class="col col-md-9">
              <div class="row righttitle">AppsLookup</div>
              <div class="row">Your Gateway To Digital - Find best Deal for your Business</div>
              <div class="row">★★★★★</div>
            </div>
          </div>
        </div>
        <div class="services">
          <div class="row" style="color: gray; font-weight:bold;">{{strtoupper($heading)}}</div>
          <div class="rightitems">
            @foreach($services as $item)
              <div class="row">{{$item->services}} </div>
            @endforeach
          </div>
        </div>
      </div>

      <div class="col col-md-1"></div>
    </div>
    
  </section>
@endsection