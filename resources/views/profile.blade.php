@extends('layouts/structure')
@section('title')
    Мой профиль
@endsection
@section('content')
    <div class="inner">
        <section class="profile">
            <div class="container">
                <h1 class="profile__name">Арсений Суворов</h1>
                <div class="profile__courses">
                    <p class="profile__courses-title">Купленные курсы</p>
                    <section class="faculty">
                        <div class="faculty__courses courses">
                            <div class="course">
                                <a href="{{ route('course') }}" class="course__link"></a>
                                <div class="course__header">
                                    <p class="course__title">Базы данных для начинающих</p>
                                    <p class="course__raiting">5 <img src="img/star.svg" alt="Звезд"></p>
                                </div>
                                <p class="course__author">Кирилл Иванов</p>
                                <p class="course__dcp">На курсе вы узнаете базовые принципы работы с БД и ознакомитесь с
                                    терминологией.</p>
                                <div class="course__footer">
                                    <p class="course__price">1200 ₽</p>
                                    <p class="course__lessons">12 уроков</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
