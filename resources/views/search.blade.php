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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} "/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <!--main div-->
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

                  <form class="form-inline d-flex justify-content-center md-form form-sm">
                      <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                        aria-label="Search">
                      <a href=""><i class="fas fa-search" aria-hidden="true"></i></a>
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


<!--content-->

<div class="container">


    @if (isset($products))
    {{-- table products --}}
    <table class="table" style="width: 95%">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Cart</th>

            </tr>
        </thead>
        <tbody>
            @if (count($products) > 0)
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->product_name }}</th>
                        <td>{{ $product->product_price}}</td>
                        <td><img src="{{ $product->getFirstMediaUrl('avatar', 'thumb') }}"
                                width="100px"></td>
                        {{-- <td>{{ $product->category->category_name }}</td> --}}
                        <td><a href="{{route('cart.add', $product->id)}}"><i
                            class="fas fa-shopping-cart" style="color:#d6516d;font-size:17px"></i></a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>No result found !</td>
                </tr>
            @endif
        </tbody>
    </table>
@endif
    <br>
    <br>
    <br>
</div>


<!--content-->



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
    <!--main div-->

    <!--js-->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
