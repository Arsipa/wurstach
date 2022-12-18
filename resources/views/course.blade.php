@extends('layouts/structure')
@section('title')
    Курс "Базы данных для начинающих"
@endsection
@section('content')
    <div class="inner course-details">
        <section class="course-details__header">
            <div class="container">
                <h1 class="course-details__title">{{ $course->name }}</h1>
                <p class="course-details__subtitle">{{ $course->short_description }}</p>
                <div class="course-details__infographics">
                    <p><img src="/img/lessons.svg" alt="Уроков: "><span>{{ $course->lessonsCount() }} урока(ов)</span></p>
                    {{-- <p><img src="img/clock.svg" alt="Время: "><span>5-7 минут</span></p> --}}
                    <p><img src="/img/star.svg" alt="Рейтинг: " class="star"><span>{{ $course->course_raiting }}</span></p>
                </div>
            </div>
        </section>
        <section class="course-details__main">
            <div class="container">
                <div class="course-details__content">
                    <div class="course-details__info">
                        <p class="course-details__author">{{ $course->author->user->fio }}</p>
                        <div class="course-details__text">
                            <h2 class="course-details__text-title">О курсе</h2>
                            <p class="course-details__paragraph">
                                {{ $course->description }}
                            </p>
                        </div>
                        {{-- <div class="course-details__text">
                            <h2 class="course-details__text-title">Для кого этот курс</h2>
                            <p class="course-details__paragraph">
                                Начинающие разработчики, которые уже понимают как работают базы данных и SQL и хотят
                                расширить свои навыки инструментами проектирования.</p>
                        </div> --}}
                        {{-- <div class="course-details__text">
                            <h2 class="course-details__text-title">Программа курса</h2>
                            <ul class="course-details__lessons-list">
                                <li>Введение</li>
                                <li>Терминология</li>
                                <li>Нормализация</li>
                                <li>Практика</li>
                            </ul>
                        </div> --}}
                    </div>
                    <aside class="course-details__aside">
                        <p class="course-details__price-title">Стоимость</p>
                        <p class="course-details__price">
                            @if ($course->price == null)
                                Бесплатно
                            @else
                                {{ $course->price }} ₽
                            @endif
                        </p>
                        <button class="course-details__buy-btn jb__link" id="buy_btn">Купить</button>
                        <a href="{{ route('lesson') }}" class="course-details__buy-btn jb__link">Учиться</a>
                    </aside>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('popups')
    <div id="buy-course_bg" class="authorization hidden">
        <form action="https://robokassa.com" class="form">
            <span class="close-form" id="buy-course_bg_close"><img src="/img/plus.svg" alt="Закрыть"></span>
            <p class="form__title">Оплата доступа к курсу {{ $course->name }}</p>
            <fieldset class="form__inputs">
                <p class="buy-p"><span>Email: </span><span>{{ auth()->user()->email }}</span></p>
                <p class="buy-p"><span>Стоимость: </span><span>{{ $course->price }} ₽</span></p>
            </fieldset>
            <button type="submit">Оплатить</button>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="/js/buy-course.js"></script>
@endsection
