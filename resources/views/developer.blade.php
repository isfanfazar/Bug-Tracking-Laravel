@extends('layout.template')

@section('title','View Bugs')


@section('content')

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Foto</th>
                <th>Bug Taking Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach($developer as $data)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $data->name}}</td>
                    <td><img src="{{ url('foto/'.$data->foto) }}" width="100px"></td>
                    <td>{{ $data->id_bug}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection