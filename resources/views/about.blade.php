@extends('master', ['menu' => $menu])

@section('title', $title)

@push('style')
<style>
    header {
        background: green;
    }
</style>
@endpush

@section('header')
<header>
    <h1>This is header from about</h1>
</header>
@endsection

@section('main')
<h1>Welcome to about page.</h1>
@endsection

@push('scripts')
<script src="......"></script>
<script>
    window.alert("Hello Laravel!");
</script>
@endpush