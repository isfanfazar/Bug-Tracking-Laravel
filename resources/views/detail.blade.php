@extends('layout.template')

@section('title','detail')

@section('content')
    <table class="table">
        <a href="/createbug" class="btn btn-primary">Back</a>
        <tr>
                <th>No</th>
                <th>:</th>
                <th>{{ $view->id}}</th>
        </tr>
        <tr>
                <th>Judul</th>
                <th>:</th>
                <th>{{ $view->judul}}</th>
        </tr>
        <tr>
                <th>Foto</th>
                <th>:</th>
                <th><img src="{{ url('foto/'.$view->foto) }}" width="100px" alt=""></th>
        </tr>
        <tr>
                <th>Detail</th>
                <th>:</th>
                <th>{{ $view->detail}}</th>
        </tr>
        <tr>
                <th>Versi</th>
                <th>:</th>
                <th>{{ $view->versi}}</th>
        </tr>
        <tr>
                <th>Status</th>
                <th>:</th>
                <th>{{ $view->status}}</th>
        </tr>
        <td>
            <a href="" class="btn btn-success">Done</a>
            <a href="" class="btn btn-warning">Edit</a>
        </td>
    </table>
@endsection