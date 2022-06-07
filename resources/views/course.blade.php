@extends('layouts/structure')
@section('title')
    Курс "Базы данных для начинающих"
@endsection
@section('content')
    <div class="inner course-details">
        <section class="course-details__header">
            <div class="container">
                <h1 class="course-details__title">Курс "Базы данных для начинающих"</h1>
                <p class="course-details__subtitle">Теоретические и практические приемы проектирования баз данных для
                    начинающих разработчиков</p>
                <div class="course-details__infographics">
                    <p><img src="img/lessons.svg" alt=""><span>12 уроков</span></p>
                    <p><img src="img/clock.svg" alt=""><span>5-7 минут</span></p>
                    <p><img src="img/star.svg" alt="" class="star"><span>5</span></p>
                </div>
            </div>
        </section>
        <section class="course-details__main">
            <div class="container">
                <div class="course-details__content">
                    <div class="course-details__info">
                        <p class="course-details__author">Мария Бунина</p>
                        <div class="course-details__text">
                            <h2 class="course-details__text-title">О курсе</h2>
                            <p class="course-details__paragraph">
                                В курсе в простой форме рассказывается теория проектирования баз данных, а также даются
                                практические инструменты на примере учебной базы данных автосалона.
                            </p>
                            <p class="course-details__paragraph">
                                В ходе небольшой серии уроков рассматриваются варианты логического и концептуального
                                проектирования, нормализация базы до формы 4НФ, а также денормализация таблиц.
                            </p>
                        </div>
                        <div class="course-details__text">
                            <h2 class="course-details__text-title">Для кого этот курс</h2>
                            <p class="course-details__paragraph">
                                Начинающие разработчики, которые уже понимают как работают базы данных и SQL и хотят
                                расширить свои навыки инструментами проектирования.</p>
                        </div>
                        <div class="course-details__text">
                            <h2 class="course-details__text-title">Программа курса</h2>
                            <ul class="course-details__lessons-list">
                                <li>Введение</li>
                                <li>Терминология</li>
                                <li>Нормализация</li>
                                <li>Практика</li>
                            </ul>
                        </div>
                    </div>
                    <aside class="course-details__aside">
                        <p class="course-details__price-title">Стоимость</p>
                        <p class="course-details__price">1200 ₽</p>
                        <button class="course-details__buy-btn jb__link">Купить</button>
                    </aside>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
@endsection
