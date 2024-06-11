@extends('layouts.app')

@section('content')
    @foreach ($trains as $train)
        <h1>{{ $train->company }}</h1>
    @endforeach
@endsection