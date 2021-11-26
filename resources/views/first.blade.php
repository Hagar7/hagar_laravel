<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel Project</title>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Kristi&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css
    " />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} "/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
      <div class="main">
          <!--top bar-->
          <div class="top">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <div class="logo">
                            <img src="{{ asset('images/vvvv.png') }}">
                          </div>
                      </div>
                      <div class="col">
                          <div class="top-form">

                        <form class="form-inline d-flex justify-content-center md-form form-sm" action="{{ route('search') }}">
                            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                              aria-label="Search" name="query">
                            <button type="submit" class="top-btn"><i class="fas fa-search" aria-hidden="true"></i></button>
                          </form>

                        </div>
                    </div>
                    <div class="top-cart">
                        <a href="{{route('carts')}}"><i
                            class="fas fa-shopping-cart" style="color:#d6516d"></i></a>
                    </div>



                  </div>
              </div>
          </div>

          <!--end top bar-->
            <!--navbar-->
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Contact</a>
                            </li>
                      </ul>
                      <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                    </div>
                  </nav>
            </div>
      <!--end nav-->
       <!--carousel-->
       <div class="header" style="width: 100%">
           <div class="container">
               <div class="owl-carousel two">
                <div class="item  animated">
                  <img src="images/WhatsApp Image 2021-11-23 at 2.52.23 PM.jpeg">
                </div>
                <!--end item-->
                <div class="item animated">
                  <img src="images/WhatsApp Image 2021-11-23 at 11.49.08 PM.jpeg">
                </div>
              </div>
           </div>
       </div>
      <!--end carousel-->
       <!--categories-->
       <div class="cat">
        <div class="container">
            <div class="row">

                <div class=" col-sm ">
                  <a href="#">




                    <div class="item1"data-content="{{ $categ->category_name }}">
                      <img src="{{$categ->getFirstMediaUrl('category')}}">
                    </div>

                  </a>
                  <div class="text">
                      <h3>{{ $categ->category_name }}</h3>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius, dolores. Adipisci nobis nam eos molestias molestiae minus expedita optio vero explicabo laudantium blanditiis beatae fuga doloribus quibusdam sequi, dicta cum?</p>
                  </div>


                </div>



                <div class="col-sm">
                  @foreach ($categories as $category )
                  <a href="#">
                      <div class="item"data-content="{{ $category->category_name }}">

                          <img src="{{$category->getFirstMediaUrl('category')}}">
                      </div>
                    </a>

                    @endforeach

              </div>

            </div>
        </div>
    </div>
    <!--end category-->
     <!--products!-->
     <div class="products">
        <div class="container">
      <h2>Featured Products</h2>



      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Womens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Mens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Kids</a>
        </li>
    </ul><!-- Tab panes -->

    <div class="tab-content">
        <div class="tab-pane active" id="tabs-1" role="tabpanel">
            <div class="row">

                <!--all products-->
                @foreach ($products as $product )
                <a href="detail/{{ $product['id'] }}">
                <div class="col-lg-3 col-md-4 col-sm mb-2">
                    <div class="card">
                        <img src="{{$product->getFirstMediaUrl('avatar')}}">
                        <div class="card-price">
                            {{ $product->product_price }} $
                        </div>
                        <div class="card-title">
                            <h3>{{ $product->product_name }}</h3>
                        </div>
                        <div class="card-rate">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <ul>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>


                                <li><a href="{{route('cart.add', $product->id)}}"><i
                                        class="fas fa-shopping-cart"></i></a></li>



                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
                <!--end all products-->
            </div>
        </div>

        <!--start women-->
        <div class="tab-pane" id="tabs-2" role="tabpanel">
            <div class="row">
                @foreach ($CategoryProducts as $CategoryProduct )
                <a href="detail/{{ $CategoryProduct['id'] }}">
                <div class="col-lg-3 col-md-4 col-sm mb-2">
                    <div class="card">
                        <img src="{{$CategoryProduct->getFirstMediaUrl('avatar')}}">
                        <div class="card-price">
                            {{ $CategoryProduct->product_price }}$
                        </div>
                        <div class="card-title">
                            <h3>{{ $CategoryProduct->product_name }}</h3>
                        </div>
                        <div class="card-rate">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <ul>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                <li><a href="{{route('cart.add', $product->id)}}"><i
                                    class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--end women-->
        <!--start man-->
        <div class="tab-pane" id="tabs-3" role="tabpanel">
            <div class="row">

                @foreach ($Categorymens as $Categorymen )
                <a href="detail/{{ $Categorymen ['id'] }}">


                <div class="col-lg-3 col-md-4 col-sm mb-2">
                    <div class="card">
                        <img src="{{$Categorymen->getFirstMediaUrl('avatar')}}">
                        <div class="card-price">
                            {{ $Categorymen->product_price }} $
                        </div>
                        <div class="card-title">
                            <h3>{{ $Categorymen->product_name }}</h3>
                        </div>
                        <div class="card-rate">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <ul>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                <li><a href="{{route('cart.add', $product->id)}}"><i
                                    class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--end man-->
        <!--start kids-->
        <div class="tab-pane" id="tabs-4" role="tabpanel">
            <div class="row">

                @foreach ($Categorykids as $product )
                <a href="detail/{{ $product  ['id'] }}">


                <div class="col-lg-3 col-md-4 col-sm mb-2">
                    <div class="card">
                        <img src="{{$product->getFirstMediaUrl('avatar')}}">
                        <div class="card-price">
                            {{ $product->product_price }} $
                        </div>
                        <div class="card-title">
                            <h3>{{ $product->product_name }}</h3>
                        </div>
                        <div class="card-rate">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="card-btn">
                            <ul>
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                <li><a href="{{route('cart.add', $product->id)}}"><i
                                    class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--end kids-->
    </div>
        </div>
      </div>
      <!--end products-->
        <!--banner-->
    <div class="banner">
        <div class="banner-left dark">
            <img src="images/04.jpg" alt="">
            <div class="banner-text">
                <h3>70%</h3>
                <h6>Women Fashion</h6>
            </div>


        </div>
        <div class="banner-right dark">
            <img src="images/55.jpeg" alt="">
            <div class="banner-text">
                <h3>80%</h3>
                <h6>Men Fashion</h6>
            </div>

        </div>
    </div>
    <!--end banner-->
       <!--products 2-->

       <div class="products">
        <div class="container">
           <h2>Trend Products</h2>



          <div class="owl-carousel owl-theme one">
            @foreach ($trendItems as $product )

              <div class="item">
                <a href="detail/{{ $product['id'] }}">

                <div class="card">
                    <img src="{{$product->getFirstMediaUrl('avatar')}}">
                    <div class="card-price">
                        {{ $product->product_price }} $
                    </div>
                    <div class="card-title">
                        <h3>{{ $product->product_name }}</h3>
                    </div>
                    <div class="card-rate">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="card-btn">
                        <ul>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="{{route('cart.add', $product->id)}}"><i
                                class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            @endforeach


    </div>

        </div>
    </div>
    <!--end products 2-->
    <div class="blog">
        <div class="container">
            <h2>Blog</h2>
            <div class="row">
                <div class="col-sm">
                   <div class="blog-item">
                       <img src="images/04.jpg" alt="">
                       <h4>HeadLine Here</h4>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum voluptate soluta rerum quod delectus</p>
                       <button class="btn">Read More</button>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="blog-item">
                        <img src="images/05.jpg" alt="">
                        <h4>HeadLine Here</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum voluptate soluta rerum quod delectus</p>
                        <button class="btn">Read More</button>
                     </div>
                 </div>
                 <div class="col-sm">
                    <div class="blog-item">
                        <img src="images/banner (1).jpg" alt="">
                        <h4>HeadLine Here</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum voluptate soluta rerum quod delectus</p>
                        <button class="btn">Read More</button>
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <!--end blog-->
       <!--footer-->
       <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img src="{{ asset('images/Untitled-2 copy.png') }}" alt="Logo" />
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit qui a quibusdam laborum accusamus ducimus quae cumque explicabo ipsa</p>

                </div>
                <div class="col-sm">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i><a href="#">Ciro, Egypt</a></li>
                        <li><a href="#"><i class="fas fa-phone-alt"></i>010 654 466 767</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>hagar_s_ahmed@hotmail.com</a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i>010 654 466 768</a></li>

                    </ul>
                </div>
                <div class="col-sm">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i><a href="#">Ciro, Egypt</a></li>
                        <li><a href="#"><i class="fas fa-phone-alt"></i>010 654 466 767</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>hagar_s_ahmed@hotmail.com</a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i>010 654 466 768</a></li>

                    </ul>
                </div>
                <div class="col-sm">
                    <h2>Social Media</h2>
                    <button class="btn btn-danger"><a href="mailto:hagar_s_ahmed@hotmail.com">Have Any Questions? </a></button>
                    <ul class="footer-link">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--copy-->
    <div class="copy">
        Devolped by Hagar Ahmed
    </div>

      </div>



        <!--js-->
        <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"
      ></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
  <script>
      $('.one').owlCarousel({
      loop:true,
      margin:10,
      autoplay:true,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,

          },
          600:{
              items:3,

          },
          1000:{
              items:4,


          }
      }
  })
  </script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))


    <script>
        Swal.fire(
            " {{ session('success') }}",
            '',
            'success'
        )

    </script>


@endif
<script>
$('.two').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,

        },
        600:{
            items:1,

        },
        1000:{
            items:1,


        }
    }
})
</script>
    </body>
  </html>
