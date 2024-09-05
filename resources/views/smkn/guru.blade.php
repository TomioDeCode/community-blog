@extends('layouts.master')
@section('title', 'Daata Guru')
@section('menuGuru', 'active')

@section('content')
    @parent
    <div class="container text-center my-5 p-4 bg-white">
        <h1 class="my-3">Data Guru</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($guru as $gurus)
                        <li class="list-group-item">
                            {{ $gurus }}
                        </li>
                    @empty
                        <div class="alert alert-dark d-inline-block">
                            Tidak Ada Data..
                        </div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>

@endsection
