@extends('layouts.app')

@section('content')
@include('partials.intro')
@include('partials.services')
@include('partials.product-slideshow', [
    'title' => __('<b>Best Sellers</b>'),
    'tags' => [],
    'category' => '',
    ])
@include('partials.clients')
@include('partials.beginning')

@endsection
