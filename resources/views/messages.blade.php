@extends('layouts.app')

@section('title', 'Стена сообщений')
@section('content')
<div class="span2"></div>
<div class="span8">
    @if (Auth::check())
    <form action="/add" method="post" class="form-horizontal" style="margin-bottom: 50px;">
             {{ csrf_field() }}
     @if (count($errors) > 0)
        <div class="alert alert-error">
            Сообщение не может быть пустым
        </div>
    @endif
        <div class="control-group">
            <textarea style="width: 100%; height: 50px;" id="text" placeholder="Ваше сообщение..."
                    name="text"></textarea>
        </div>
        <div class="control-group">
            <button type="submit" class="btn btn-primary">Отправить сообщение</button>
        </div>
    </form>
    @endif
@if (count($messages) > 0)
@foreach ($messages as $message)
    <div class="well">
        <h5>{{ $message->getAuthor() }}</h5>
        {{ $message->message_text }}
    </div>
@endforeach
@endif
</div>
@endsection