@extends('layouts.app')
@section('title-block')Все записи
@endsection

@section('content')
<h1>Все записи</h1>
@foreach($data as $el)
  <div class="alert  alert-info">
    <h3>{{ $el->subject }}</h3>
    <p>Пациент: {{ $el->name }}</p>
    <p><small>{{ $el->created_at }}</small></p>
    <a href="{{ route('contact-data-one',$el->id) }}"><button class="btn btn-warning">Детальнее</button></a>
  </div>
@endforeach

@endsection
