@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')
    <div class="span4"></div>
    <div class="span8">

        <form action="{{ url('/register') }}" role="form" method="POST" class="form-horizontal">
         {{ csrf_field() }}
            <div class="control-group">
                <b>Регистрация</b>
            </div>
            <div class="control-group {{ $errors->has('username') ? ' error' : '' }}">
                <input type="text" id="username" name="username" placeholder="Логин" required autocomplete="off">
                @if ($errors->has('username'))
                <span class="help-inline">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="control-group {{ $errors->has('password') ? ' error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Пароль" required>
                @if ($errors->has('password'))
                <span class="help-inline">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="control-group {{ $errors->has('password') ? ' error' : '' }}">
                <input type="password" id="password-confirm" name="password_confirmation" placeholder="Повторите пароль">
                        @if ($errors->has('password'))
                <span class="help-inline">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
@endsection
