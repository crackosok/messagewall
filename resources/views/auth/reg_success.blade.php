@extends('layouts.app')
@section('title', 'Успешная регистрация')
@section('content')
 <div class="span2"></div>
    <div class="span8">

        <h3>Ура!</h3>

        <p>
            Поздравляем! Вы успешно зарегистрировались.
        </p>

        <p>
            Воспользуйтесь <a href="{{ url('/login')}}">формой авторизации</a> чтобы войти на сайт под своей учетной записью
        </p>
    </div>
@endsection