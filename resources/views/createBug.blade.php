@extends('layout.template')

@section('title','Create Bugs')

@section('content')
    @foreach ($create as $data)
        Judul : {{$data['judul']}}<br>
        Detail : {{$data['detail']}}<br>
        Versi : {{$data['versi']}}<br>
        Level : {{$data['level']}}<br>
        <br>
    @endforeach
@endsection