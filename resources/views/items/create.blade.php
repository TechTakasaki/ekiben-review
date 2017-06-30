@extends('layouts.app')

@section('content')

    <h1>駅弁新規登録</h1>

    {!! Form::model($item, ['route' => 'items.store']) !!}

        {!! Form::label('name', '駅弁') !!}
        {!! Form::text('name') !!}

        {!! Form::submit('登録') !!}

    {!! Form::close() !!}

@endsection