@extends('layouts/main-layout')

@section('title', 'Илья Катков')

@section('content')
<div class="nav_div">
    <a class="nav_label" href="#">Новости</a>
    <a class="nav_label" href="#">Учеба</a>
    <a class="nav_label" href="#">Работа</a>
    <a class="nav_label" href="#">Проекты</a>
</div>
</div>
<div class="content_div">
@foreach ($posts as $post)
    <div class="post">
        {{$post['category_id']}}
        <h3>{{$post['title']}}</h3>
        <p>{{$post['description']}}</p>
        <button>Открыть</button>
    </div>
@endforeach
</div>
<div class="footer_div">
    <button>1</button>
    <button>2</button>
    <button>3</button>
</div>
@endsection