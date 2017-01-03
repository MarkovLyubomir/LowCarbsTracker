@extends('layouts.app')

@section('content')
<h1>Add Food</h1>

{{ Form::open(array('url' => 'foods/store', 'method' => 'put')) }}
    {{ Form::label('Food Name') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}

    {{ Form::label('Type') }}
    {{ Form::select('type', ['1' => 'protein'], null, ['class' => 'form-control', 'placeholder' => 'Pick a type...']) }}

    {{ Form::label('Water') }}
    {{ Form::number('water', null, ['class' => 'form-control']) }}

    {{ Form::label('Proteins') }}
    {{ Form::text('proteins', null, ['class' => 'form-control']) }}

    {{ Form::label('Fats') }}
    {{ Form::text('fats', null, ['class' => 'form-control']) }}

    {{ Form::label('Carbs') }}
    {{ Form::text('carbs', null, ['class' => 'form-control']) }}

    {{ Form::label('Calories') }}
    {{ Form::text('calories', null, ['class' => 'form-control']) }}
    
{{ Form::close() }}

@endsection