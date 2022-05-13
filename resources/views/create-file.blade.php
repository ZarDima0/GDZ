@extends('home')
@section('content')
<h2>Добавить практику</h2>
<div class = 'file-add_form' >
<form action="{{route('upload.file')}}" class = 'file-create' method="post" enctype="multipart/form-data">
    @csrf
    <input name = 'nameFile' placeholder = 'название практики' type="text">
    <select name = 'instityte' class = 'instityte-List'id=""></select>
    <select name = 'direction' class = 'direction-List'  style = 'display:block' name="" id="">
    </select>
    <select name = 'article' class = 'articke-List'  style = 'display:block'id="">
    <option disabled value="value1">Значение 1</option>
    </select>
    <input class = 'new-article' name = 'new-article' placeholder = 'Напиши название предмета' style = 'display:none' type="text">
    <input type="file" name="file">
    @if ($errors->all())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</div>
@endif
    <input type="submit" value="Сохранить">
</form>
</div>

@endsection