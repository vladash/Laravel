@extends('layouts.app')
@section('title-block')Обновление записи
@endsection

@section('content')
<h1>Обновление записи</h1>

<form action="{{ route('contact-update-submit',$data->id)}}" method="post">
  @csrf

  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" value="{{$data->name}}" placeholder="Имя" id="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">Введите email</label>
    <input type="text" name="email" value="{{$data->email}}" placeholder="email" id="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="subject">Врач</label>
    <input type="text" name="subject" value="{{$data->subject}}" placeholder="К какому врачу запись" id="subject" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">Пожелание пациента</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение">{{$data->message}}</textarea>
  </div>

  <button type="submit" class="btn btn-success">Обновить</button>
</form>
@endsection
