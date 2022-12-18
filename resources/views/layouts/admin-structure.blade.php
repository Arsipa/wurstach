<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/8a553633d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link id="theme-style" rel="stylesheet" href="/css/admin.css">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
</head>

<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    role="img">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div>

                        {{-- search --}}
                        {{-- <div class="search-mobile-trigger d-sm-none col">
                            <i class="search-mobile-trigger-icon fas fa-search"></i>
                        </div>
                        <div class="app-search-box col">
                            <form class="app-search-form">
                                <input type="text" placeholder="Поиск..." name="search"
                                    class="form-control search-input">
                                <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                        class="fas fa-search"></i></button>
                            </form>
                        </div> --}}
                        {{-- search --}}

                        <div class="app-utilities col-auto">
                            <div class="app-utility-item">
                                <i class="admin-name">{{ auth()->user()->nickname }}</i>
                                <a class="btn app-btn-primary" style="margin-left: 10px;" href="{{ route("admin.logout") }}"><i class="fa fa-sign-out" style="color: white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding">
                    <a class="app-logo">
                        <span class="logo-text">Admin</span>
                    </a>
                </div>
                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled">
                        <li class="nav-item">
                            <a class="{{Request::url() == route('admin.users') ? 'active nav-link' : 'nav-link'}}" href="{{ route('admin.users') }}">
                                <span class="nav-icon">
                                    <i class="fa fa-user" aria-hidden="true" style="font-size: 18px;"></i>
                                </span>
                                <span class="nav-link-text">Пользователи</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="{{Request::url() == route('admin.faculties') ? 'active nav-link' : 'nav-link'}}" href="{{ route('admin.faculties') }}">
                                <span class="nav-icon">
                                    <i class="fa fa-solid fa-graduation-cap" aria-hidden="true" style="font-size: 18px;"></i>
                                </span>
                                <span class="nav-link-text">Факультеты</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="/js/admin.js"></script>

</body>

</html>
