@extends('layout/layout.blade.php')
@require('/resource/static/js/test.js')
@section('title', 'welcome Kerisy')

@section('content')
    <h3 style="padding: 20px;">hello {{$me}}!</h3>
@endsection
