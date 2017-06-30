@extends('layouts.app')

@section('content')

    <h1>id = {{ $item->id }} の詳細</h1>
    
    <p>{{ $item->name }}</p>

@endsection