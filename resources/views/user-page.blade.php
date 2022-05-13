@extends('home')
@section('content')
<div class = 'cabinet'>
<div class = 'cabinet-user'>
    <div class = 'cabinet-user__avatar'>
        <img src="/img/avatar.png" width = '150px'alt="">
    </div>
    <div class = 'cabinet-user__info'>
        <h4>Имя: {{$userData->name}}</h4>
        <h4>Email: {{$userData->email}}</h4>
    </div>
</div>
</div>
@endsection