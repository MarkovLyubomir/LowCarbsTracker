@extends('layouts.app')

@section('content')
<h1>Food List</h1>

{{$foodList}}

<a href="/foods/add">Add</a>
@endsection