<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.svg" sizes="48x48" type="image/x-icon">

    <link rel="stylesheet" href="css/main.css">
    
    <title>@yield('title')</title>
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__left">
                    <a href="{{ route('index') }}"><img src="img/logo.svg" alt="Wurstach" class="header__logo"></a>
                    <nav class="navigation">
                        <ul class="navigation__list">
                            <li class="navigation__item"><a href="" class="navigation__links">Каталог</a></li>
                            <li class="navigation__item"><a href="" class="navigation__links">Акции</a></li>
                            <li class="navigation__item"><a href="" class="navigation__links">О нас</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header__right">
                    <form action="" class="header__form">
                        <img src="img/search.svg" alt="Лупа">
                        <input type="search" name="search" id="search" placeholder="Поиск...">
                    </form>
                    <a href="" class="header__button header__login">Войти</a>
                    <a href="" class="header__button header__registration">Регистрация</a>
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
                    <li class="footer__list-item"><a class="footer__list-link" href="">Каталог</a></li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">Акции</a></li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">О нас</a></li>
                </ul>
                <ul>
                    <li class="footer__list-title">Условия</li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">Условия пользования</a></li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">Условия конфиденциальности</a></li>
                </ul>
                <ul>
                    <li class="footer__list-title">мы в сети</li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">Вконтакте</a></li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">Телеграм</a></li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">Инстаграм</a></li>
                </ul>
                <ul>
                    <li class="footer__list-title">Контакты</li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">Помощь</a></li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">Контакты</a></li>
                    <li class="footer__list-item"><a class="footer__list-link" href="">Вакансии</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
@yield('scripts')

</body>

</html>