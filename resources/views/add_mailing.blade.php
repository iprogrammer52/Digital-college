@extends('layouts.app')

@section('content')  
<form action="{{asset('mailing.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="TypeMailing">Типы рассылки</label>
        <select class="form-control" id="TypeMailing">
            <option>Обычная</option>
            <option>Срочное оповещение</option>
        </select>
    </div>
    <div class="form-group">
        <label for="addressee">Получатели: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox3">Все</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Преподаватели</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Студенты</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
            <label class="form-check-label" for="inlineCheckbox3">Администрация</label>
        </div>
    </div>
    <div class="form-group">
        <label for="title">Заголовок рассылки</label>
        <input id="title" class="form-control" type="text" name="title">
    </div>
    <div class="form-group">
        <label for="message">Текст рассылки</label>
        <textarea id="message" class="form-control" name="" rows="3"></textarea>
    </div>
    <input class="btn btn-dark" type="submit" name="send">
</form>
@endsection