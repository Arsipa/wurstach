@extends('layouts/structure')
@section('title')
    Каталог
@endsection
@section('content')
    <div class="container">
        <div class="inner">
            @foreach ($faculties as $item)
                @if ($item->coursesCount() != 0)
                    <section class="faculty">
                        <h2 class="section-title">{{ $item->name }}</h2>
                        <div class="faculty__courses courses">
                            @foreach ($item->getCourses() as $course)
                                <div class="course">
                                    <a href="{{ route('course', ['course' => $course->id_course]) }}"
                                        class="course__link"></a>
                                    <div class="course__header">
                                        <p class="course__title">{{ $course->name }}</p>
                                        <p class="course__raiting">{{ $course->course_raiting }} <img src="img/star.svg"
                                                alt="Звезд"></p>
                                    </div>
                                    <p class="course__author">{{$course->author->user->fio}}</p>
                                    <p class="course__dcp">{{ $course->short_description }}</p>
                                    <div class="course__footer">
                                        <p class="course__price">
                                            @if ($course->price == null)
                                                Бесплатно
                                            @else
                                                {{ $course->price }} ₽
                                            @endif
                                        </p>
                                        <p class="course__lessons">{{$course->lessonsCount()}} уроков</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="center">
                            <button class="courses__more jb__link">Ещё</button>
                        </div>
                    </section>
                @else
                    <section class="faculty">
                        <h2 class="section-title">{{ $item->name }}</h2>
                        <h2>Факультет пуст</h2>
                    </section>
                @endif
            @endforeach

        </div>
    </div>
@endsection
@section('scripts')
@endsection
