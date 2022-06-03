@extends('layouts/structure')
@section('title')
    Главная
@endsection
@section('content')
    <div class="container">
        <div class="inner">
            <section class="jb">
                <div class="jb__info">
                    <h1 class="jb__title">Мечты о знаниях <span class="green">приводят</span> на Wurstach </h1>
                    <p class="jb__subtitle">Маркетплейс онлайн-курсов
                        от профессионалов</p>
                    <a href="{{route("catalog")}}" class="jb__link">Перейти в каталог</a>
                </div>
                <img src="img/jb.svg" alt="Учись вместе с нами">
            </section>
            <section class="best">
                <h2 class="section-title">Wurstach Best</h2>
                <p class="section-subtitle">Подборка наших лучших факультетов</p>
                <div class="best__list">
                    <div class="best__item card">
                        <div class="card__header">
                            <span></span>
                            <span class="card__tag">42 курса</span>
                        </div>
                        <div class="card__main">
                        </div>
                        <div class="card__footer">
                            <p class="card__title">Базы данных</p>
                        </div>
                        <a href="{{route("catalog")}}#faculty-database" class="card__link"></a>
                    </div>
                    <div class="best__item card">
                        <div class="card__header">
                            <span></span>
                            <span class="card__tag">42 курса</span>
                        </div>
                        <div class="card__main">
                        </div>
                        <div class="card__footer">
                            <p class="card__title">Базы данных</p>
                        </div>
                        <a href="" class="card__link"></a>
                    </div>
                    <div class="best__item card">
                        <div class="card__header">
                            <span></span>
                            <span class="card__tag">42 курса</span>
                        </div>
                        <div class="card__main">
                        </div>
                        <div class="card__footer">
                            <p class="card__title">Базы данных</p>
                        </div>
                        <a href="" class="card__link"></a>
                    </div>
                    <div class="best__item card">
                        <div class="card__header">
                            <span></span>
                            <span class="card__tag">42 курса</span>
                        </div>
                        <div class="card__main">
                        </div>
                        <div class="card__footer">
                            <p class="card__title">Базы данных</p>
                        </div>
                        <a href="" class="card__link"></a>
                    </div>
                    <div class="best__item card">
                        <div class="card__header">
                            <span></span>
                            <span class="card__tag">42 курса</span>
                        </div>
                        <div class="card__main">
                        </div>
                        <div class="card__footer">
                            <p class="card__title">Базы данных</p>
                        </div>
                        <a href="" class="card__link"></a>
                    </div>
                    <div class="best__item card">
                        <div class="card__header">
                            <span></span>
                            <span class="card__tag">42 курса</span>
                        </div>
                        <div class="card__main">
                        </div>
                        <div class="card__footer">
                            <p class="card__title">Базы данных</p>
                        </div>
                        <a href="" class="card__link"></a>
                    </div>
                </div>
            </section>
            <section class="faq">
                <h2 class="section-title">FAQ</h2>
                <p class="section-subtitle">Ответы на ваши популярные вопросы</p>
                <div class="faq__list">
                    <div class="faq__question question">
                        <div class="question__header">
                            <div class="question__id green">01</div>
                            <div class="question__title">Как купить курс?</div>
                            <button class="question__button"><img src="img/plus.svg" alt=""></button>
                        </div>
                        <div class="question__main">
                            <p class="question__answer">Для покупки курса необходимо зарегистрироваться на сайте, затем
                                зайти на страницу курса, нажать кнопку “Добавить в корзину” или “Купить в 1 клик” и оплатить
                                заказ. После этого курс станет доступен.</p>
                        </div>
                    </div>
                    <div class="faq__question question">
                        <div class="question__header">
                            <div class="question__id green">02</div>
                            <div class="question__title">Как восстановить пароль?</div>
                            <button class="question__button"><img src="img/plus.svg" alt=""></button>
                        </div>
                        <div class="question__main">
                            <p class="question__answer">Нажмите на кнопку "Забыли пароль?" при авторизации и следуйте
                                указаниям.</p>
                        </div>
                    </div>
                    <div class="faq__question question">
                        <div class="question__header">
                            <div class="question__id green">03</div>
                            <div class="question__title">Как получить сертификат по курсу?</div>
                            <button class="question__button"><img src="img/plus.svg" alt=""></button>
                        </div>
                        <div class="question__main">
                            <p class="question__answer">После оформления покупки вам станут доступны уроки. По окончанию
                                обучения вам выдадут сертификат о завершении, который будет храниться в вашем аккаунте.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="index-courses">
                <h2 class="section-title">Wurstach Courses </h2>
                <p class="section-subtitle">Подборка наших лучших <span class="green">БЕСПЛАТНЫХ</span> курсов</p>
                <div class="index-courses__list">
                    <div class="index-courses__item card">
                        <div class="card__header">
                            <span class="card__raiting">5 <img src="img/star.svg" alt=""></span>
                            <span></span>
                            <span class="card__tag">42 курса</span>
                        </div>
                        <div class="card__main">
                            <p><span>Занятий: </span>15</p>
                        </div>
                        <div class="card__footer">
                            <p class="card__title">Базы данных</p>
                        </div>
                        <a href="" class="card__link"></a>
                    </div>
                    <div class="index-courses__item card">
                        <div class="card__header">
                            <span class="card__raiting">5 <img src="img/star.svg" alt=""></span>
                            <span></span>
                            <span class="card__tag">42 курса</span>
                        </div>
                        <div class="card__main">
                            <p><span>Занятий: </span>15</p>
                        </div>
                        <div class="card__footer">
                            <p class="card__title">Базы данных</p>
                        </div>
                        <a href="" class="card__link"></a>
                    </div>
                    <div class="index-courses__item card">
                        <div class="card__header">
                            <span class="card__raiting">5 <img src="img/star.svg" alt=""></span>
                            <span></span>
                            <span class="card__tag">42 курса</span>
                        </div>
                        <div class="card__main">
                            <p><span>Занятий: </span>15</p>
                        </div>
                        <div class="card__footer">
                            <p class="card__title">Базы данных</p>
                        </div>
                        <a href="" class="card__link"></a>
                    </div>
                </div>
            </section>
            <section class="reviews">
                <h2 class="section-title centered">Отзывы </h2>
                <div class="reviews__slider" id="reviews__slider">
                    <button id="reviews__left-arrow"><img src="img/arrow.svg" alt="Назад"></button>
                    <div class="reviews__slider-inner">
                        <div class="reviews__track" id="reviews__track">
                            <div class="review__slide review">
                                <div class="review__content">
                                    <p class="review__text">Когда-то я долго искал подходящую платформу для онлайн
                                        обучения. Пять лет назад попал на Wurstach и до сих пор учусь. Ведь здесь есть курсы
                                        на любой вкус.</p>
                                    <p class="review__author">Вадим Баташев</p>
                                </div>
                                <img src="img/avatar.png" alt="Вадим Баташев">
                            </div>
                            <div class="review__slide review">
                                <div class="review__content">
                                    <p class="review__text">Когда-то я долго искал подходящую платформу для онлайн
                                        обучения. Пять лет назад попал на Wurstach и до сих пор учусь. Ведь здесь есть курсы
                                        на любой вкус.</p>
                                    <p class="review__author">Вадим Баташев</p>
                                </div>
                                <img src="img/avatar.png" alt="Вадим Баташев">
                            </div>
                            <div class="review__slide review">
                                <div class="review__content">
                                    <p class="review__text">Когда-то я долго искал подходящую платформу для онлайн
                                        обучения. Пять лет назад попал на Wurstach и до сих пор учусь. Ведь здесь есть курсы
                                        на любой вкус.</p>
                                    <p class="review__author">Вадим Баташев</p>
                                </div>
                                <img src="img/avatar.png" alt="Вадим Баташев">
                            </div>
                        </div>
                    </div>
                    <button id="reviews__right-arrow"><img src="img/arrow.svg" alt="Вперед"></button>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="js/faq.js"></script>
    <script src="js/reviews-slider.js"></script>
@endsection
