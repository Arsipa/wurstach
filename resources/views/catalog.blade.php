@extends('layouts/structure')
@section('title')
    Каталог
@endsection
@section('content')
    <div class="container">
        <div class="inner">
            <section class="faculty" id="faculty-database">
                <h2 class="section-title">Базы данных</h2>
                <div class="faculty__courses courses">
                    <div class="course">
                        <a href="{{route("course")}}" class="course__link"></a>
                        <div class="course__header">
                            <p class="course__title">Базы данных для начинающих</p>
                            <p class="course__raiting">5 <img src="img/star.svg" alt=""></p>
                        </div>
                        <p class="course__author">Кирилл Иванов</p>
                        <p class="course__dcp">На курсе вы узнаете базовые принципы работы с БД и ознакомитесь с терминологией.</p>
                        <div class="course__footer">    
                            <p class="course__price">1200 ₽</p>
                            <p class="course__lessons">12 уроков</p>
                        </div>
                    </div>
                    <div class="course">
                        <a href="" class="course__link"></a>
                        <div class="course__header">
                            <p class="course__title">Базы данных для начинающих</p>
                            <p class="course__raiting">5 <img src="img/star.svg" alt=""></p>
                        </div>
                        <p class="course__author">Кирилл Иванов</p>
                        <p class="course__dcp">На курсе вы узнаете базовые принципы работы с БД и ознакомитесь с терминологией.</p>
                        <div class="course__footer">    
                            <p class="course__price">1200 ₽</p>
                            <p class="course__lessons">12 уроков</p>
                        </div>
                    </div>
                    <div class="course">
                        <a href="" class="course__link"></a>
                        <div class="course__header">
                            <p class="course__title">Базы данных для начинающих</p>
                            <p class="course__raiting">5 <img src="img/star.svg" alt=""></p>
                        </div>
                        <p class="course__author">Кирилл Иванов</p>
                        <p class="course__dcp">На курсе вы узнаете базовые принципы работы с БД и ознакомитесь с терминологией.</p>
                        <div class="course__footer">    
                            <p class="course__price">1200 ₽</p>
                            <p class="course__lessons">12 уроков</p>
                        </div>
                    </div>
                    <div class="course">
                        <a href="" class="course__link"></a>
                        <div class="course__header">
                            <p class="course__title">Базы данных для начинающих</p>
                            <p class="course__raiting">5 <img src="img/star.svg" alt=""></p>
                        </div>
                        <p class="course__author">Кирилл Иванов</p>
                        <p class="course__dcp">На курсе вы узнаете базовые принципы работы с БД и ознакомитесь с терминологией.</p>
                        <div class="course__footer">    
                            <p class="course__price">1200 ₽</p>
                            <p class="course__lessons">12 уроков</p>
                        </div>
                    </div>
                    <div class="course">
                        <a href="" class="course__link"></a>
                        <div class="course__header">
                            <p class="course__title">Базы данных для начинающих</p>
                            <p class="course__raiting">5 <img src="img/star.svg" alt=""></p>
                        </div>
                        <p class="course__author">Кирилл Иванов</p>
                        <p class="course__dcp">На курсе вы узнаете базовые принципы работы с БД и ознакомитесь с терминологией.</p>
                        <div class="course__footer">    
                            <p class="course__price">1200 ₽</p>
                            <p class="course__lessons">12 уроков</p>
                        </div>
                    </div>
                    <div class="course">
                        <a href="" class="course__link"></a>
                        <div class="course__header">
                            <p class="course__title">Базы данных для начинающих</p>
                            <p class="course__raiting">5 <img src="img/star.svg" alt=""></p>
                        </div>
                        <p class="course__author">Кирилл Иванов</p>
                        <p class="course__dcp">На курсе вы узнаете базовые принципы работы с БД и ознакомитесь с терминологией.</p>
                        <div class="course__footer">    
                            <p class="course__price">1200 ₽</p>
                            <p class="course__lessons">12 уроков</p>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <button class="courses__more jb__link">Ещё</button>
                </div>
            </section>
            <section class="faculty" id="faculty-scripts">
                <h2 class="section-title">Скрипты</h2>
                <div class="faculty__courses courses">
                    <div class="course">
                        <a href="" class="course__link"></a>
                        <div class="course__header">
                            <p class="course__title">Основы Java-Script</p>
                            <p class="course__raiting">4.5 <img src="img/star.svg" alt=""></p>
                        </div>
                        <p class="course__author">Антон Ваганов</p>
                        <p class="course__dcp">Курс по основам javaScript. Познакомтесь ос скриптами поближе.</p>
                        <div class="course__footer">    
                            <p class="course__price">800 ₽</p>
                            <p class="course__lessons">4 урока</p>
                        </div>
                    </div>
                    <div class="course">
                        <a href="" class="course__link"></a>
                        <div class="course__header">
                            <p class="course__title">Основы Java-Script</p>
                            <p class="course__raiting">4.5 <img src="img/star.svg" alt=""></p>
                        </div>
                        <p class="course__author">Антон Ваганов</p>
                        <p class="course__dcp">Курс по основам javaScript. Познакомтесь ос скриптами поближе.</p>
                        <div class="course__footer">    
                            <p class="course__price">800 ₽</p>
                            <p class="course__lessons">4 урока</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
