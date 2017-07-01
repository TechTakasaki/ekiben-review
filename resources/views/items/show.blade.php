@extends('layouts.app')

@section('content')

    <h1>id = {{ $item->id }} の詳細</h1>
    
    <p>{{ $item->name }}</p>
    
    <p><a href="{{ route('items.reviews',['id' => $item ->id]) }}" class="btn btn-success btn-lg">レビュー一覧</a></p>

@endsection