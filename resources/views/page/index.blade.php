@extends('layout.main', ['title' => __('Menu')])

@section('content')
    <div class="main-container">
        <search-page-component action="{{ route('searchQuery') }}"></search-page-component>
    </div>
@endsection
