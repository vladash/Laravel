@extends('layouts.app')
@section('title-block')Записаться
@endsection

@section('content')
<h1>Записаться к врачу</h1>

<form action="{{ route('contact-form')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" placeholder="Имя" id="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Введите email</label>
    <input type="text" name="email" placeholder="email" id="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="name">Врач</label>
    <input type="text" name="subject" placeholder="К какому врачу запись" id="subject" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Пожелание пациента</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
