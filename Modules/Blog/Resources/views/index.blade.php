@extends('blog::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        Tampilan ini dimuat dari modul: {!! config('blog.name') !!}
    </p>
@endsection
