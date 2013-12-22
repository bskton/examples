@extends('layout')

@section('main')
<div class="container">
{{ Form::open(array('class' => 'form-signin')) }}

    @if (!$errors->isEmpty())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <h2 class="form-signin-heading">{{ $title }}</h2>

    {{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Логин')) }}
    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Пароль')) }}

    <label class="checkbox">
        {{ Form::checkbox('remember-me', 1) }} Запомни меня
    </label>

    {{ Form::submit('Войти', array('class' => 'btn btn-lg btn-primary btn-block')) }}

{{ Form::close() }}
</div>
@stop
