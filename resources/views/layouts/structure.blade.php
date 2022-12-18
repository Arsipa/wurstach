<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.svg" sizes="48x48" type="image/x-icon">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="" id="theme-file">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__wrapper">
                    <div class="header__left">
                        <a href="{{ route('index') }}"><img src="/img/logo.svg" alt="Wurstach" class="header__logo"></a>
                        <nav class="navigation">
                            <ul class="navigation__list">
                                <li class="navigation__item"><a href="{{ route('index') }}"
                                        class="navigation__links">Главная</a></li>
                                <li class="navigation__item"><a href="{{ route('catalog') }}"
                                        class="navigation__links">Каталог</a></li>
                                <li class="navigation__item"><a href="{{ route('about') }}" class="navigation__links">О
                                        нас</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__right">
                        <form action="{{ route('index') }}" class="header__form">
                            <img src="/img/search.svg" alt="Лупа">
                            <input type="search" name="search" id="search" placeholder="Поиск...">
                        </form>
                        @if (auth()->check())
                            <a href="{{ route('profile') }}" class="profile-link"><span
                                    class="profile-name">{{ auth()->user()->nickname }}</span></a>
                        @else
                            <button id="login-btn" class="header__button header__login">Войти</button>
                            <button id="reg-btn" class="header__button header__registration">Регистрация</button>
                        @endif
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            @yield('content')
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__wrapper">
                    <ul>
                        <li class="footer__list-title">Wurstach</li>
                        <li class="footer__list-item"><a class="footer__list-link"
                                href="{{ route('catalog') }}">Каталог</a></li>
                        <li class="footer__list-item"><a class="footer__list-link" href="{{ route('about') }}">О
                                нас</a>
                        </li>
                    </ul>
                    <ul>
                        <li class="footer__list-title">Условия</li>
                        <li class="footer__list-item"><a class="footer__list-link" href="#">Условия
                                пользования</a></li>
                        <li class="footer__list-item"><a class="footer__list-link" href="#">Условия
                                конфиденциальности</a></li>
                    </ul>
                    <ul>
                        <li class="footer__list-title">мы в сети</li>
                        <li class="footer__list-item"><a class="footer__list-link" href="#">Вконтакте</a></li>
                        <li class="footer__list-item"><a class="footer__list-link" href="#">Телеграм</a></li>
                        <li class="footer__list-item"><a class="footer__list-link" href="#">Инстаграм</a></li>
                    </ul>
                    <ul>
                        <li class="footer__list-title">Контакты</li>
                        <li class="footer__list-item"><a class="footer__list-link" href="#">Помощь</a></li>
                        <li class="footer__list-item"><a class="footer__list-link" href="#">Контакты</a></li>
                        <li class="footer__list-item"><a class="footer__list-link" href="#">Вакансии</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <div id="auth_bg" class="authorization hidden">
        <form action="{{ route('login') }}" id="login" class="form hidden">
            <span class="close-form"><img src="/img/plus.svg" alt="Закрыть"></span>
            <p class="form__title">Войти</p>
            <fieldset class="form__inputs">
                <input type="email" name="email" id="login-email" placeholder="Email" required>
                <input type="password" name="password" id="login-password" placeholder="Пароль" required>
            </fieldset>
            <button type="submit">Войти</button>
        </form>
        <form action="{{ route('registration') }}" id="registration" class="form hidden">
            <span class="close-form"><img src="/img/plus.svg" alt="Закрыть"></span>
            <p class="form__title">Регистрация</p>
            <fieldset class="form__inputs">
                <input type="text" name="I_user" id="registration-name" placeholder="Имя" required>
                <input type="email" name="email" id="registration-email" placeholder="Email" required>
                <input type="password" name="password" id="registration-password" placeholder="Пароль" required>
            </fieldset>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
    <div class="theme">
        <button id="theme"><img src="/img/moon.svg" alt="Поменять тему"></button>
    </div>
    @yield('popups')

    <script src="/js/authorization.js"></script>
    <script src="/js/change-theme.js"></script>
    @yield('scripts')

</body>

</html>
