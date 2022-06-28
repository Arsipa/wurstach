@extends('layouts/structure')
@section('title')
    Добавить видео
@endsection
@section('content')
    <div class="container">
        <div class="inner">
            <form action="{{route("add_video_action")}}" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="file" name="video_src" id="video_src">
                <select name="id" id="lesson_id">
                    @foreach (App\Models\Lesson::all() as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                </select>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
@endsection
