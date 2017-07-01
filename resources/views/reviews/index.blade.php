@extends('layouts.app')

@section('content')
    @include('reviews.reviews', ['reviews' => $reviews])
@endsection
