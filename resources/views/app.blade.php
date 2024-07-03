<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href={{ asset('assets/favicon.ico') }} />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href={{ asset('css/styles.css') }} rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                    <li class="nav-item">
                        <a class="nav-link" href="products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.create')}}">Media Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index_newCompny.index')}}">New Compny</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('upload.index')}}">Importt File</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.create')}}">S3 File Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subscriptions">Subscriptions</a>
                    </li>

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
                    @endguest


                        @auth
                            <form action="{{ route('logout') }}" method="POST" id="ankit-logout-form">
                                <li class="nav-item"><a class="nav-link" href="#" onclick="document.getElementById('ankit-logout-form').submit()">Log Out</a></li>
                                @csrf
                            </form>
                        @endauth



                                    {{-- <li class="nav-item"><a class="nav-link" href={{ route('compony.index') }}>Compnies</a></li>
                                    <li class="nav-item"><a class="nav-link" href={{ route('employ.index') }}>Employs</a></li> --}}

                        @guest
                          @else (Route::has('login'))
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Wellcome.... {{ Auth::user()->name }}
                                </a>
                        @endguest





                    </ul>
                    <form class="d-flex">

                    </form>
                </div>
            </div>
        </nav>

        @yield('content')


