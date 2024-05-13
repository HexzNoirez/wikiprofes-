<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- Material Kit CSS -->
  <link href="{{ asset('assets/css/material-kit.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body style="background-color:#0A0A08">
    {{$slot}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                  <div class="container my-auto">
                    <div class="row"> {{--inicio login--}}
                      <div class="col-lg-8 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                              <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                              <div class="row mt-3">
                                <div class="col-2 text-center ms-auto">
                                  <a class="btn btn-link px-3" href="javascript:;">
                                    <i class="fa fa-facebook text-white text-lg"></i>
                                  </a>
                                </div>
                                <div class="col-2 text-center px-1">
                                  <a class="btn btn-link px-3" href="javascript:;">
                                    <i class="fa fa-github text-white text-lg"></i>
                                  </a>
                                </div>
                                <div class="col-2 text-center me-auto">
                                  <a class="btn btn-link px-3" href="javascript:;">
                                    <i class="fa fa-google text-white text-lg"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-body">
                            <form role="form" method="POST" action="/login" class="text-start">
                              @csrf
                              <div class="input-group input-group-outline my-3">
                                <label class="form-label" for="email" value="{{ __('Email') }}" ></label>
                                <input placeholder="Example@email.com" id="email" type="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username" />
                              </div>
                              <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="password" value="{{ __('Password') }}" ></label>
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required autocomplete="current-password" />
                              </div>
                              <div class="form-check form-switch d-flex align-items-center mb-3">
                                <input class="form-check-input" type="checkbox" id="remember_me" name="remember" checked>
                                <label class="form-check-label mb-0 ms-3" for="remember_me">{{ __('Remember me') }}</label>
                              </div>
                              <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">{{ __('Log in') }}</button>
                              </div>
                              <p class="mt-4 text-sm text-center">
                                <a href="{{route('register')}}">Don't have an account?</a>
                              </p>
                            </form>
                          </div>
                        </div>
                      </div>{{--final login--}}
                    </div>
                  </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn bg-gradient-dark" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

{{--Fondo del sitio web--}}
  <div class="page-header min-vh-80" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/1/1e/Laboratorios_de_c%C3%B3mputo_Alfa_y_Beta_%28noche%29%2C_CUCEI.jpg')"> {{--imagen cagada jaja https://i.imgflip.com/1w5ns0.jpg--}}
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="text-center">
            <h1 class="text-white">Wikiprofes</h1>
            <h3 class="text-white">Tu herramienta de recomendaciones de profesores</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6" style="background-color: #303032">
    <div class="container">
      <div class="section text-center">
        {{--<h2 class="title">Your main section here</h2>--}}
            <div style="display: grid; justify-content: center;">
              
            @yield('content')
            
            </div>
      </div>
    </div>
  </div>

  {{--</x-navbar>--}}

  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="https://www.creative-tim.com/product/material-kit">
              <img src="{{asset('./assets/img/logo-ct-dark.png')}}" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4">Material Kit 2</h6>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                  Freebies
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                  Premium Tools
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                  Blog
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Resources</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                  Illustrations
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                  Bits & Snippets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                  Affiliate Program
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Help & Support</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                  Knowledge Center
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                  Custom Development
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                  Sponsorships
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <div>
            <h6 class="text-sm">Legal</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service/" target="_blank">
                  Terms & Conditions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy/" target="_blank">
                  Privacy Policy
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                  Licenses (EULA)
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Your custom scripts here -->

</body>

</html>
