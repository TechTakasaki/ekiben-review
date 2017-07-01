@extends('layouts.app')

@section('content')

    <h1>{{ $item->name }}の新規レビューの投稿</h1>

    {!! Form::open(['route' => ['items.reviews.store', $item->id]]) !!}

        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5']) !!}
        <br />
        {!! Form::submit('登録') !!}

    {!! Form::close() !!}

@endsection