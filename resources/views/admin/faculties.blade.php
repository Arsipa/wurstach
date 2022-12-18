@extends('layouts/admin-structure')
@section('title')
    Пользователи
@endsection
@section('content')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Пользователи</h1>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <button class="btn app-btn-primary add-btn add-btn-blog"><i class="fa fa-plus"
                                style="margin-right:5px;"></i>Создать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 all-cards">
        @foreach ($paginate as $item)
            <div class="col-6 col-md-4 col-xl-3 col-xxl-3">
                <div class="app-card app-card-doc shadow-sm h-100">
                    <div class="app-card-body p-3">
                        <h4 class="app-doc-title truncate mb-0" title="{{ $item->name }}">{{ $item->name }}</h4>
                        <input type="text" name="name" class="change-input" placeholder="Имя"
                            value="{{ $item->nickname }}">
                        <div class="app-doc-meta">
                            <ul class="list-unstyled mb-0">
                                <li class="blog-date-text">
                                    <span class="text-muted">Курсов:</span>
                                    <span class="admin-blog-date">{{ $item->coursesCount() }}</span>
                                </li>
                                <input type="text" class="change-input-blog-date" placeholder="Роль"
                                    value="{{ $item->id_role }}">
                            </ul>
                        </div>
                        <button class="change-btn btn btn-primary">Изменить</button>
                        <button class="save-btn btn btn-primary" id="{{ $item->id_faculty }}">Сохранить</button>
                        <button class="delete-btn btn btn-primary" path="post"><i class="far fa-trash-alt"
                                style="color: white;"></i></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
