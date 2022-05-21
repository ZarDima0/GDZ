@extends('home')
@section('content')
<div class = 'title-page'>
<h1>Личная страница</h1>
<a type = 'button' href="{{route('cabinet.edit',['id' => $userData->id])}}">Изменить</a>
</div>
<div class = 'cabinet'>
<div class = 'cabinet-user'>
    <div class = 'cabinet-user__avatar'>
        <img src="/img/avatar.png" width = '150px'alt="">
    </div>
    <div class = 'cabinet-user__info'>
        <h4>Имя: {{$userData->name}}</h4>
        <h4>Email: {{$userData->email}}</h4>
    </div>
    <div>
        @if(session('success'))
        <h1>Изменено</h1>
        @endif
    </div>
    @if ($errors->all())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</div>
    @endif
</div>
</div>
<h1>Мои практики</h1>
<div>
<?php
var_dump(Session::has('message'));
var_dump(Session::get('message'))
?>
@if(Session::has('message'))
		{{Session::get('message')}}
@endif
</div>
<div class = 'file-list'>
@foreach ($fileList as $file)
    <div class = 'file-list__file'>
        <p>{{$file->nameFile}}</p>
        <div class = 'file-list__file-link'>
            <a href="{{route('cabinet.download',['id' => $file->id])}}">Скачать</a>
            <a href="{{route('cabinet.destroy',['id' => $file->id])}}"><img  width = '20px' src="/img/delete.png" alt=""></a>
        </div>
    </div>
@endforeach
</div>
@endsection
