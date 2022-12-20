<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>@yield('title')</title> --}}
    <title>Finstore</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {margin: 0;}
    </style>
  </head>
  <body>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card py-3 px-2">
                    <p class="text-center mb-3 mt-2">LOGIN</p>
                    <div class="row mx-auto ">
                        <div class="col-4">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="col-4">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <div class="col-4">
                            <i class="fab fa-google"></i>
                        </div>
                    </div>
                    <div class="division">
                        <div class="row">
                            <div class="col-3"><div class="line l"></div></div>
                            <div class="col-6"><span>OU AVEC MON EMAIL</span></div>
                            <div class="col-3"><div class="line r"></div></div>
                        </div>
                    </div>
                    <form class="myform">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Mot de passe">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Rester connecte</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 bn">Mot se passe oublie</div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="button" class="btn btn-block btn-primary btn-lg"><small><i class="far fa-user pr-2"></i>Se connecter</small></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
