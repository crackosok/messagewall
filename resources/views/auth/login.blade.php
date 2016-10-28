@extends('layouts.app')
@section('title', 'Авторизация')
@section('content')
    <div class="span4"></div>
    <div class="span3">
 @if (count($errors) > 0)
        <div class="alert alert-error">
            Вход в систему с указанными данными невозможен!
        </div>
@endif
        <form action="{{ url('/login') }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
              <div class="control-group">
                <b>Авторизация </b>
            </div>
            <div class="control-group">
                <input type="text" id="username" name="username" placeholder="Логин" autocomplete="off">
            </div>
            <div class="control-group">
                <input type="password" id="password" name="password" placeholder="Пароль">
            </div>
            <div class="control-group">
               <label class="checkbox">
                    <input type="checkbox" id="remember" name="remember" value="1"> Запомнить меня
                </label>
                <button type="submit" class="btn btn-primary">Вход</button>
            </div>
        </form>
    </div>
@endsection
