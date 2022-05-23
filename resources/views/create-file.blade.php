@extends('home')
@section('content')
<h2>Добавить практику</h2>
<div class = 'file-add_form' >
<form action="{{route('upload.file')}}" class = 'file-create' method="post" enctype="multipart/form-data">
    @csrf
    @if($message = Session::get('fileadd'))
    <div class = 'block-success'>           
        <h3>Файл добавлен</h3>
        <img class = 'block-success__button-delete' src="/img/delete.png" alt="delele" width = '25px'>
    </div>
    @endif
    @if ($errors->all())
        <div class = 'block-error'>           
            <h3>Ошибка</h3>
            @foreach($errors->all() as $error)
            <div class = 'block-error__text-error'>
                <p>{{ $error }}</p>
            </div>
			@endforeach
            <img class = 'block-success__button-delete' src="/img/delete.png" alt="delele" width = '25px'>
        </div>
    @endif
    <input name = 'nameFile' placeholder = 'название практики' type="text">
    <select name = 'instityte' class = 'instityte-List'id=""></select>
    <select name = 'direction' class = 'direction-List'  style = 'display:block' name="" id="">
    </select>
    <select name = 'article' class = 'articke-List'  style = 'display:block'id="">
    <option disabled value="value1">Значение 1</option>
    </select>
    <input class = 'new-article' name = 'new-article' placeholder = 'Напиши название предмета' style = 'display:none' type="text">
    <input type="file" name="file">
    <input type="submit" value="Сохранить">
</form>
</div>

@endsection