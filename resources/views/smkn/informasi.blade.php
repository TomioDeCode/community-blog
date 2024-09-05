@extends('layouts.master')
@section('title', 'Informasi Jurusan')

@section('content')
    <div class="container text-center mt-3 p-4 text-black">
        <h1>Informasi Jurusan {{ $data[0] }}, Jurusan {{ $data[1] }}</h1>
    </div>
@endsection
