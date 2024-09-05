@extends('layouts.master')
@section('title', 'Gallery')
@section('menuGallery', 'active')

@section('content')
    @parent
    <div class="container text-center my-5 p-4 bg-white">
        <h1 class="my-3">Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="https://source.unsplash.com/cXUOQWdRV4I/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://source.unsplash.com/kfwPJieZVwI/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/JdzHrfX4l4Q/350x250" class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>

@endsection
