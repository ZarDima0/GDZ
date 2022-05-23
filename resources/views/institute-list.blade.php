@extends('home')
@section('content')
<h2>Список Институтов</h2>
<div class="list-blokc">
    @foreach($instituteList as $InstituteItem)
    <div class='institute-block'>
        <div class='institute-block__title'>
            <img src="/img/needle.png" width='25' height='25' alt="">
            <a href="{{route('direction.index',['instituteSlug' => $InstituteItem->slug])}}">{{$InstituteItem->nameInstitute}}</a>
        </div>
    </div>
    @endforeach
</div>
@endsection