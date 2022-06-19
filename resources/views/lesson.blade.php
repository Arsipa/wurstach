@extends('layouts/structure')
@section('title')
    Курс "Базы данных для начинающих"
@endsection
@section('content')
    <div class="inner">
        <div class="container">
            <div class="lesson">
                <h2 class="section-title">Урок 1. Введение в базы данных</h2>
                <video controls src="video/Видео текст (8.2).mp4" width="100%" height="600px"></video>
            </div>

            <div class="center">
                <ul class="pagination">
                    <li><a href="{{ route('lesson') }}" class="pagination__active">1</a></li>
                    <li><a href="{{ route('lesson') }}">2</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
