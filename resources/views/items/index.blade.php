@extends('layouts.app')

@section('content')
    @include('items.items', ['items' => $items])
@endsection
<a href="{{ route('items.create') }}" class="btn btn-primary btn-sm">駅弁新規登録</a>